<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can add server-side validation here

    // Replace this email with your desired email address
    $to = "your@example.com";
    $headers = "From: $email";

    // Construct the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_body, $headers);

    // You can add further actions or redirects after successful submission
    echo "Thank you for contacting us!";
} else {
    // Redirect to the contact form page if accessed directly
    header("Location: contact_form.html");
    exit();
}
?>
