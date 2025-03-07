<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

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

    // Send email using PHPMailer with SMTP
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dummyy257@gmail.com';  // Replace with your email
        $mail->Password = 'ezohpsrlhaggmonh';  // Replace with your email password
        $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS; ';  // Use TLS encryption
        $mail->Port = 587;

        // Email settings
        $mail->setFrom('dummyy257@gmail.com', 'Your Form'); // Replace with your email
        $mail->addAddress($email, $name);  // Send confirmation email to user

        $mail->Subject = "Thank You for Contacting Us!";
        $mail->Body    = "Hello $name,\n\nThank you for reaching out. We have received your message:\n\n$message\n\nBest Regards,\nYour Website Team";

        $mail->send();

        $_SESSION['success'] = "Your message has been sent successfully! Check your email.";
    } catch (Exception $e) {
        $_SESSION['error'] = "Email could not be sent. Error: " . $mail->ErrorInfo;
    }

    header("Location: index.php");
    exit();
}
