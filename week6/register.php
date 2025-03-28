<?php
header("Content-Type: application/json");
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $response = ["success" => false, "message" => ""];


    $firstName = $conn->real_escape_string(trim($_POST["first_name"]));
    $lastName = $conn->real_escape_string(trim($_POST["last_name"]));
    $email = $conn->real_escape_string(trim($_POST["email"]));
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $phone = $conn->real_escape_string(trim($_POST["phone_number"]));
    $address = $conn->real_escape_string(trim($_POST["address"]));

    $result = $conn->query("SELECT id FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $response["message"] = "Email already registered.";
        echo json_encode($response);
        exit;
    }


    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


    $sql = "INSERT INTO users (first_name, last_name, email, password, phone, address)
VALUES ('$firstName', '$lastName', '$email', '$hashedPassword', '$phone', '$address')";

    if ($conn->query($sql)) {
        $response["success"] = true;
        $response["message"] = "Registration successful!";
    } else {
        $response["message"] = "Error: " . $conn->error;
    }

    $conn->close();
    echo json_encode($response);
}
