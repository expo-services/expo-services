<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["Name"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $address = htmlspecialchars($_POST["Address"]);
    $email = htmlspecialchars($_POST["E-mail"]);
    $pincode = htmlspecialchars($_POST["Pincode"]);

    // Email recipient (change this to your email)
    $to = "exposervices42@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email body
    $message = "You have received a new contact form submission:\n\n";
    $message .= "Name: $name\n";
    $message .= "Gender: $gender\n";
    $message .= "Address: $address\n";
    $message .= "Email: $email\n";
    $message .= "Pincode: $pincode\n";

    // Email headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
