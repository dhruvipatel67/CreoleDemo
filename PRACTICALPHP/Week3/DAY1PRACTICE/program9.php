<!-- 9. Create a session and store a user's name and email. Retrieve and display the session values on a separate page. -->
<?php
session_start();
$_SESSION["name"] = "Dhruvi";
$_SESSION["email"] = "dhruvi25@gmail.com";
echo "Session variable are set. <a href='reterive.php'>Retrieve Data</a>";
?>