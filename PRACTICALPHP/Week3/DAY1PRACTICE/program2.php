<!-- 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total. -->
<?php
$sum = 0;
for ($i = 0; $i <= 30; $i++) {
    $sum += $i;
}
echo "Sum of all the integers between 0 and 30: $sum\n";
?>