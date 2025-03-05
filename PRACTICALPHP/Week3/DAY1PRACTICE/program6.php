<!-- 6. Find the sum of all even numbers from 1 to n. Put a form with a textbox and submit button. n should be entered via a text box and on click of button print sum. -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST["number"]);
    $sum = 0;
    for ($i = 2; $i <= $n; $i += 2) {
        $sum += $i;
    }
    echo "Sum of even numbers from 1 to $n : $sum ";
}
?>

<form method="post">
    Enter a number:<input type="number" name="number">
    <input type="submit" value="Calculate Sum">
</form>