<!-- 1. <?php
        $x = 75;
        $y = "75hello";
        echo ($x <=> $y);
        ?>

2. <?php echo "How much are the bananas?" ?> -->


<!-- 3. Which code snippet uses the correct syntax for creating an instance of the Pet class?
$dog = new Pet;
$horse = (new Pet);
$cat = new Pet(); -->


<!-- 4. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
<?php
// Declare and initialize a variable with the value 'PHP Tutorial'
$var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title><?php echo $var; ?> - W3resource!</title>
</head>
<body>
    <h3><?php echo $var; ?></h3>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p><a href="https://www.w3resource.com/php/php-home.php">Go to the <?php echo $var; ?></a>.</p>
</body> 
</html>-->


<!-- 5. Create a HTML form and accept the user name and display the name through PHP echo statement.
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form method='POST'>
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <input type="submit" value="Submit Name">
    </form>
    <?php
    // Check if the form is submitted and 'name' is set in $_POST
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
        // Retrieve name from the form and store it in a local variable
        $name = $_POST['name'];
        // Display a greeting message with the entered name
        echo "<h3> Hello $name </h3>";
    }
    ?>
</body>
</html> -->

<!-- 6. PHP browser detection script:
<?php
// Display the text "Your User Agent is :" followed by the user agent string from the HTTP request
echo "Your User Agent is :" . $_SERVER['HTTP_USER_AGENT'];
?> -->


<!-- 7. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
<?php
// Define the URL to be parsed
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
// Parse the URL and store its components in the $url variable
$url = parse_url($url);
// Display the scheme (protocol) of the parsed URL
echo 'Scheme : ' . $url['scheme'] . "\n";
// Display the host (domain) of the parsed URL
echo 'Host : ' . $url['host'] . "\n";
// Display the path of the parsed URL
echo 'Path : ' . $url['path'] . "\n";
?> -->

<!-- 8. Write a PHP script to print current PHP version.
<?php
// Output the current PHP version
echo 'Current PHP version : ' . phpversion();
// Output the version of the Tidy extension, or nothing if the extension isn't enabled
echo phpversion('tidy') . "\n";
?> -->

<!-- 9. Write a PHP script to delay the program execution for the given number of seconds.
<?php
// Output the current time in the 'hour:minute:second' format
echo date('h:i:s') . "\n";
// Sleep for 5 seconds
sleep(5);
// Output the current time again after waking up
echo date('h:i:s') . "\n";
?> -->

<!-- 10. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.
<?php
// Initialize variable $d with value 'A00'
$d = 'yd0';
// Loop through 5 iterations
for ($n = 0; $n < 5; $n++) {
    // Increment $d and echo the result
    echo ++$d . "\n";
}
?> -->


<!-- 11. Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.
<?php
// Function to test a given number using ternary operators
function trinary_Test($n)
{
    // Ternary operators used to check the value of $n and assign a corresponding message to $r
    $r = $n > 30
        ? "greater than 30"
        : ($n > 20
            ? "greater than 20"
            : ($n > 10
                ? "greater than 10"
                : "Input a number at least greater than 10!"));

    // Display the result with the input number
    echo $n . " : " . $r . "\n";
}
// Test the function with different input values
trinary_Test(29);
trinary_Test(60);
trinary_Test(25);
trinary_Test(45);
?> -->


<!-- 12. Get the full URL
<?php
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $full_url . "\n";
?> -->

<!-- 13. Swap two variables
<?php
$a = 15;
$b = 276;
echo "\nBefore swapping:  " . $a . ',' . $b;
list($a, $b) = array($b, $a);
echo "\nAfter swapping:  " . $a . ',' . $b . "\n";
?> -->


<!-- 14. Convert word to digit:
<?php
function word_digit($word)
{
    $warr = explode(';', $word);
    $result = '';
    foreach ($warr as $value) {
        switch (trim($value)) {
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;
        }
    }
    return $result;
}
echo word_digit("zero;three;five;six;eight;one");
echo "<br/>";
echo word_digit("seven;zero;one") . "\n";
?> -->

15. Valid an email address:
<?php
function valid_email($email)
{
    // Trim any leading or trailing whitespaces from the email
    $result = trim($email);
    if (filter_var($result, FILTER_VALIDATE_EMAIL)) {
        return "true";
    } else {
        echo "false";
    }
}
echo valid_email("abc@example.com");
echo "<br/>";
echo valid_email("abc#example.com");
?>