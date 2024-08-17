<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $message = $_POST['message'];

    // Email details
    $to = "asutoshpayasi2001@gmail.com";
    $subject = "New Job Application";
    $body = "Name: $name\nEmail: $email\nPosition: $position\nMessage: $message";

    // File upload handling
    if(isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] == 0) {
        $filename = $_FILES['pdf_file']['name'];
        $filetype = $_FILES['pdf_file']['type'];
        $filesize = $_FILES['pdf_file']['size'];

        // Check if the file is a PDF
        if($filetype != 'application/pdf') {
            http_response_code(400);
            echo "Error: Only PDF files are allowed.";
            exit();
        }

        // Read file contents
        $file = $_FILES['pdf_file']['tmp_name'];
        $content = file_get_contents($file);

        // Email with attachment
        $boundary = md5(time());
        $headers = "From: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";

        $message = "--" . $boundary . "\r\n";
        $message .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $body . "\r\n";

        $message .= "--" . $boundary . "\r\n";
        $message .= "Content-Type: application/pdf; name=\"" . $filename . "\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
        $message .= chunk_split(base64_encode($content)) . "\r\n";
        $message .= "--" . $boundary . "--";
    } else {
        // If no file was uploaded, send a regular email
        $headers = "From: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $message = $body;
    }

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Thank you! Your application has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your application.";
    }
} else {
    // In case the form was accessed directly
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>