<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    // Email details
    $to = "muhammadomar1100@gmail.com"; // Replace with your email
    $subject = "New Course Registration";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nCourse: $course";
    $headers = "From: noreply@yourdomain.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>
