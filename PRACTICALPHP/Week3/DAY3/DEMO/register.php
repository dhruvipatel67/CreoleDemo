<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $response = ["success" => false, "message" => ""];

    $firstName = trim($_POST["first_name"]);
    $lastName = trim($_POST["last_name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $phone = trim($_POST["phone_number"]);
    $address = trim($_POST["address"]);

    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword) || empty($phone) || empty($address)) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    if (strlen($password) < 6) {
        $response["message"] = "Password must be at least 6 characters.";
        echo json_encode($response);
        exit;
    }

    if ($password !== $confirmPassword) {
        $response["message"] = "Passwords do not match.";
        echo json_encode($response);
        exit;
    }

    if (!preg_match("/^\d{10}$/", $phone)) {
        $response["message"] = "Phone number must be 10 digits.";
        echo json_encode($response);
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    if (!empty($email) && !empty($password)) {
        $response["success"] = true;
        $response["message"] = "Registration successful!";
    } else {
        $response["message"] = "Registration failed.";
    }

    echo json_encode($response);
}
