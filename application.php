<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "asutoshpayasi2001@gmail.com";
    $subject = "New Job Application";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $message = $_POST['message'];
    
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Position: $position\n";
    $body .= "Message: $message\n";
    
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // File upload handling
    if(isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        $filename = $_FILES['cv']['name'];
        $filetype = $_FILES['cv']['type'];
        $filesize = $_FILES['cv']['size'];
        
        // Read file contents
        $file = $_FILES['cv']['tmp_name'];
        $content = file_get_contents($file);
        
        // Email with attachment
        $boundary = md5(time());
        $headers = "From: webmaster@example.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\r\n";
        
        $message = "--" . $boundary . "\r\n";
        $message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
        $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $message .= $body . "\r\n";
        
        $message .= "--" . $boundary . "\r\n";
        $message .= "Content-Type: " . $filetype . "; name=\"" . $filename . "\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
        $message .= chunk_split(base64_encode($content)) . "\r\n";
        $message .= "--" . $boundary . "--";
    } else {
        $message = $body;
    }
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to home page on success
        header("Location: index.php?status=success");
        exit();
    } else {
        // Redirect to home page on failure
        header("Location: index.php?status=error");
        exit();
    }
}
?>