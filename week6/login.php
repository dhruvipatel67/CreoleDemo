<?php
session_start();
header("Content-Type: application/json");
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $response = ["success" => false, "message" => ""];

    $email = $conn->real_escape_string(trim($_POST["email"]));
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    $result = $conn->query("SELECT id, first_name, last_name, password FROM users WHERE email = '$email'");

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];

            $response["success"] = true;
            $response["message"] = "Login successful!";
        } else {
            $response["message"] = "Invalid password.";
        }
    } else {
        $response["message"] = "User not found.";
    }

    $conn->close();
    echo json_encode($response);
}
