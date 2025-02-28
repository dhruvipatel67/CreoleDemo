<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method Processing</title>
</head>

<body>

    <h2>POST Data Received</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
        echo "Age: " . htmlspecialchars($_POST["age"]) . "<br>";
    } else {
        echo "<p>No POST data received.</p>";
    }
    ?>

    <br><a href="postform.php">Go Back</a>

</body>

</html>