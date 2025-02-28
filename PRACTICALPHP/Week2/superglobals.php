<!-- <?php
        $x = 75;
        function f()
        {
            echo $GLOBALS['x'];
        }

        f()
        ?> -->

<!-- <?php
        $x = 75;

        function my()
        {
            global $x;
            echo $x;
        }
        my()
        ?> -->

<!-- <?php
        $x = 100;

        echo $GLOBALS["x"];
        echo $x;
        ?> -->

<!-- <?php
        function myfunction()
        {
            $GLOBALS["x"] = 100;
        }

        myfunction();

        echo $GLOBALS["x"];
        echo $x;
        ?> -->

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>


<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?> -->

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form> -->

<!-- <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?> -->



<!-- <?php
        echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
        ?> -->

<!-- <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?> -->

<!-- <?php
        $arr = getenv();
        foreach ($arr as $key => $val)
            echo "$key=>$val";
        ?> -->

<!-- <?php
        $lan = "php";
        echo "i am learning $lan";
        ?> -->

<!-- <?php

        $value = 'something from somewhere';

        setcookie("TestCookie", $value);
        setcookie("TestCookie", $value, time() + 3600);  /* expire in 1 hour */
        setcookie("TestCookie", $value, time() + 3600, "/~rasmus/", "example.com", true);

        ?> -->