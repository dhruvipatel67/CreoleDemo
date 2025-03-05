<!-- 10. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

1)green
2)red
3)white -->

<?php
$color = array('white', 'green', 'red');
echo implode(",", $color) . ",<br><br>";

asort($color);
$i = 1;
foreach ($color as $c) {
    echo "$i) $c <br>";
    $i++;
}
?>