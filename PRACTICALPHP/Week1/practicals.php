<!-- <?php
        $x = 5;
        $y = "John";
        echo $x;
        echo $y;
        ?>

<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

<?php
$x = 5;
var_dump($x);
?>


<?php
$x = $y = $z = "Fruit";
echo $x;
echo $y;
echo $z;
?> -->

<!-- <?php
        $x = 5; // global scope

        function myTest()
        {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside function is: $x</p>";
        ?> -->
<!-- <?php
        function my()
        {
            static $x = 0;
            echo $x;
            $x++;
        }

        my();
        echo "<br>";
        my();
        echo "<br>";
        my();
        echo "<br>";
        my();
        ?> -->

<!-- <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo "<h2>$txt1</h2>";
        echo "<p>Study PHP at $txt2</p>";
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);
        ?> -->


<!-- <?php
        $x = "Hello world!";
        $x = null;
        var_dump($x);
        ?> -->

<!-- <?php
        $x = 5;
        var_dump($x);
        echo "<br>";
        $x = "Hello";
        var_dump($x);
        ?> -->

<!-- <?php
        $a = 5;
        $b = (string) $a;
        var_dump($b);
        ?> -->


<!-- <?php
        echo strlen("Hello world!");
        ?>

<?php
echo str_word_count("Hello world!");
?>

<?php
echo strpos("Hello  world!", "world");
?> -->

<!-- <?php
        $x = "Hello World!";
        echo strtoupper($x);
        echo "<br>";
        echo strtolower($x);
        echo "<br>";
        echo str_replace("World", "Everyone", $x);
        echo "<br>";
        echo strrev($x);
        ?> -->

<!-- <?php
        $x = " Hello World! ";
        echo trim($x);
        echo "<br>";
        ?>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> -->

<!-- <?php
        $x = "Hello World!";
        $y = explode(" ", $x);

        //Use the print_r() function to display the result:
        print_r($y);
        ?> -->

<!-- <?php
        $x = "Hello";
        $y = "World";
        $z = $x . $y;
        echo $z;
        ?> -->

<!-- <?php
        $x = "Hello";
        $y = "World";
        $z = $x . " " . $y;
        echo $z;
        echo "<br>";
        $z = "$x $y";
        echo $z;
        ?> -->

<!-- <?php
        $x = "Hello World!";
        $y = "Hi, how are you?";
        echo substr($x, 7, 3);
        echo "<br>";
        echo substr($x, 6);
        echo "<br>";
        echo substr($y, -5, 3);
        echo "<br>";
        echo substr($y, 5, -3);
        ?> -->

<?php
$x = "\x48\x65\x6c\x6c\x6f";
echo $x;
echo "<br>";
$x = "\110\145\154\154\157";
echo $x;
echo "<br>";
$x = "Hello\tWorld";
echo $x;
echo "<br>";
$x = "Hello\rWorld";
echo $x;
echo "<br>";
$x = "Hello\nWorld";
echo $x;
echo "<br>";
$x = "Escape php variable name \$myvar";
echo $x;
echo "<br>";
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
echo "<br>";
$x = 'We are the so-called \'Vikings\' from the north.';
echo $x;
?>