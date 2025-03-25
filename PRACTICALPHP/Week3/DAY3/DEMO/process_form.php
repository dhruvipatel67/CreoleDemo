<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';
require 'fetch.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

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


    $name_proper = mysqli_real_escape_string($conn, $name);
    $email_proper = mysqli_real_escape_string($conn, $email);
    $message_proper = mysqli_real_escape_string($conn, $message);

     $sql = "INSERT INTO Users (name, email, message) VALUES ('$name_proper', '$email_proper', '$message_proper')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Your message has been sent successfully and saved to the database!";
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
        header("Location: index.php");
        exit();
    }


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dummyy257@gmail.com'; // Replace with your Gmail
        $mail->Password = 'ezohpsrlhaggmonh'; // Replace with your Gmail App password
        $mail->SMTPSecure = 'tls'; // Corrected the encryption type
        $mail->Port = 587;

        // Email settings
        $mail->setFrom('dummyy257@gmail.com', 'Your Form');
        $mail->addAddress($email, $name);

        $mail->Subject = "Thank You for Contacting Us!";
        $mail->Body = "Hello $name,\n\nThank you for reaching out. We have received your message:\n\n$message\n\nBest Regards,\nYour Website Team";

        $mail->send();

        $_SESSION['success'] .= " Check your email for confirmation!";
    } catch (Exception $e) {
        $_SESSION['error'] = "Email could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }

    mysqli_close($conn);

    header("Location: index.php");
    exit();
}
