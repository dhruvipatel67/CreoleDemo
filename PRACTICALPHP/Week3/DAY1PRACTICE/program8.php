<!-- 8. Write a PHP script to split the following string.
Sample string : '034508'
Expected Output : 03:45:08 -->

<?php
$number = '034508';
$formatted = substr($number, 0, 2) . ":" . substr($number, 2,  2) . ":" . substr($number, 4, 2);
echo $formatted;
?>