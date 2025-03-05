<!-- 7. Print all even numbers between 1 to 100 using while loop. -->

<?php
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0) {
        echo ($i < 100) ? "$i," : "$i";
    }
    $i++;
}
