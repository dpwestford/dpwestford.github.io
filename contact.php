<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can add code to save the data to a database or send an email
    // For demonstration, we'll just display the data
    echo "<h2>Thank you for contacting us, $name!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    echo "<h2>Form submission error.</h2>";
}
?>