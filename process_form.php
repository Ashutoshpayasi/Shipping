<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "sreyasimarine@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        header('Location:index.php');
        echo "Thank you! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // In case the form was accessed directly
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
