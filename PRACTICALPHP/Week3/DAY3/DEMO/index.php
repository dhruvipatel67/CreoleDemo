<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Contact Us</h2>

        <?php
        session_start();
        if (isset($_SESSION['success'])) {
            echo '<p class="success-message">' . $_SESSION['success'] . '</p>';
            unset($_SESSION['success']);
        } elseif (isset($_SESSION['error'])) {
            echo '<p class="error-message">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }

        // Store previous values if the form was submitted with errors
        $name = $_SESSION['form_data']['name'] ?? '';
        $email = $_SESSION['form_data']['email'] ?? '';
        $message = $_SESSION['form_data']['message'] ?? '';
        unset($_SESSION['form_data']);
        ?>

        <form action="process_form.php" method="post">
            <div class="group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <span class="error"><?php echo $_SESSION['errors']['name_error'] ?? ''; ?></span>
            </div>

            <div class="group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <span class="error"><?php echo $_SESSION['errors']['email_error'] ?? ''; ?></span>
            </div>

            <div class="group">
                <label for="message">Message:</label>
                <textarea id="message" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                <span class="error"><?php echo $_SESSION['errors']['message_error'] ?? ''; ?></span>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>

<?php unset($_SESSION['errors']); ?>