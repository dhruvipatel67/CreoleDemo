<!-- 5. Write a program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).
	1
	2 3
	4 5 6
	7 8 9 10
	11 12 13 14 15 -->
<?php
function flyodtriangle($n)
{
    $num = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num++ . " ";
        }
        echo "<br>";
    }
}
echo "<b>FlyodTrinangle (n=5):</b><br>";
flyodtriangle(5);

echo "<b>FlyodTrinangle (n=11):</b><br>";
flyodtriangle(11);
?>