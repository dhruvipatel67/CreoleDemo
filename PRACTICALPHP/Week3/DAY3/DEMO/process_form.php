<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate Name
    if (empty($name)) {
        $errors['name_error'] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors['name_error'] = "Only letters and white space allowed";
    }

    // Validate Email
    if (empty($email)) {
        $errors['email_error'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email_error'] = "Invalid email format";
    }

    // Validate Message
    if (empty($message)) {
        $errors['message_error'] = "Message is required";
    } elseif (strlen($message) < 10) {
        $errors['message_error'] = "Message must be at least 10 characters";
    }

    // If there are errors, store them in session and redirect back
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header("Location: index.php");
        exit();
    }

    // If validation passes, send an email
    $to = $email;  // Send confirmation email to user
    $subject = "Thank You for Contacting Us!";
    $message_body = "Hello $name,\n\nThank you for reaching out. We have received your message:\n\n$message\n\nBest Regards,\nYour Website Team";
    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $message_body, $headers)) {
        $_SESSION['success'] = "Your message has been sent successfully! Check your email.";
    } else {
        $_SESSION['error'] = "Something went wrong. Please try again.";
    }

    header("Location: index.php");
    exit();
}
