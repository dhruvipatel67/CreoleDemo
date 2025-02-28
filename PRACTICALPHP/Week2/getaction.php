<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method Processing</title>
</head>

<body>

    <h2>GET Data Received</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
        echo "Name: " . htmlspecialchars($_GET["name"]) . "<br>";
        echo "Age: " . htmlspecialchars($_GET["age"]) . "<br>";
    } else {
        echo "<p>No GET data received.</p>";
    }
    ?>

    <br><a href="getform.php">Go Back</a>

</body>

</html>