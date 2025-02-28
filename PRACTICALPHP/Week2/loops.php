<!-- Conditional Statements -->
<!-- <?php
        $t = 14;

        if ($t < 20) {
            echo "Have a good day!";
        }
        ?>-->

<!-- <?php
        $x = 100;
        $y = 50;

        if ($x == 100 or $y == 80) {
            echo "Hello world!";
        }
        ?> -->

<!-- <?php
        $x = 100;
        $y = 50;

        if ($x == 100 && $y == 50) {
            echo "Hello world!";
        }
        ?> -->

<!-- <?php
        $x = 100;
        $y = 50;

        if ($x == 100 xor $y == 80) {
            echo "Hello world!";
        }
        ?> -->

<!-- <?php
        $a = 5;

        if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
            echo "$a is a number between 2 and 7";
        }
        ?> -->

<!-- <?php
        $a = 200;
        $b = 33;
        $c = 500;

        if ($a > $b && $a < $c) {
            echo "Both conditions are true";
        }
        ?> -->
<!-- <?php
        $t = date("H");

        if ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        ?> -->

<!-- <?php
        $t = date("H");
        echo "<p>The hour (of the server) is " . $t;
        echo ", and will give the following message:</p>";

        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        ?> -->

<!-- <?php
        $a = 5;
        if ($a < 10) $b = "Hello";
        echo $b
        ?> -->

<!-- <?php
        $a = 13;
        $b = $a < 10 ? "Hello" : "Good Bye";
        echo $b;
        ?> -->

<!-- <?php
        $a = 21;

        if ($a > 10) {
            echo "Above 10";
            if ($a <= 20) {
                echo " but not above 20";
            } else {
                echo " but above 20";
            }
        }
        ?>

<?php
$a = 20;

if ($a > 10) {
    echo "Above 10";
    if ($a <= 20) {
        echo " but not above 20";
    } else {
        echo " but above 20";
    }
}
?> -->

<!-- <?php
        $favcolor = "yellow";

        switch ($favcolor) {
            default:
                echo "Your favorite color is neither red, blue, nor green!";
                break;
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
        }
        ?> -->

<!-- <?php
        $d = 3;

        switch ($d) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "The week feels so long!";
                break;
            case 6:
            case 0:
                echo "Weekends are the best!";
                break;
            default:
                echo "Something went wrong";
        }
        ?> -->

<!-- TYPES OF LOOPS -->
<!-- <?php
        $i = 1;
        while ($i <= 6) {
            echo $i;
            echo "<br>";
            $i++;
        }
        ?> -->

<!-- <?php
        $i = 1;
        while ($i < 6) {
            if ($i == 3) break;
            echo $i;
            echo "<br>";
            $i++;
        }
        ?> -->

<!-- <?php
        $i = 0;
        while ($i < 6) {
            $i++;
            if ($i == 3) continue;
            echo $i;
            echo "<br>";
        }
        ?> -->

<!-- <?php
        $a = 1;
        while ($a < 6):
            echo $a;
            $a++;
        endwhile;
        ?> -->

<!-- <?php
        $i = 0;
        while ($i < 100) {
            $i += 10;
            echo "$i<br>";
        }
        ?> -->

<!-- <?php
        $i = 1;
        do {
            echo "$i<br>";
            $i++;
        } while ($i < 6);
        ?> -->

<!-- <?php
        $i = 8;
        do {
            echo "$i<br>";
            $i++;
        } while ($i < 6);
        ?> -->

<!-- <?php
        $i = 1;
        do {
            if ($i == 3) break;
            echo "$i<br>";
            $i++;
        } while ($i < 6);
        ?> -->

<!-- <?php
        $i = 0;

        do {
            $i++;
            if ($i == 4) continue;
            echo "$i<br>";
        } while ($i < 6);
        ?> -->

<!-- <?php
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
        ?> -->

<!-- <?php
        for ($x = 0; $x <= 10; $x++) {
            if ($x == 3) break;
            echo "The number is: $x <br>";
        }
        ?> -->

<!-- <?php
        for ($x = 0; $x <= 10; $x++) {
            if ($x == 3) continue;
            echo "The number is: $x <br>";
        }
        ?> -->

<!-- <?php
        for ($x = 0; $x <= 100; $x += 10) {
            echo "The number is: $x <br>";
        }
        ?> -->

<!-- <?php
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $x) {
            echo "$x <br>";
        }
        ?> -->

<!-- <?php
        $members = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

        foreach ($members as $x => $y) {
            echo "$x : $y <br>";
        }
        ?> -->

<!-- <?php
        class Car
        {
            public $color;
            public $model;
            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->model = $model;
            }
        }

        $myCar = new Car("red", "Volvo");
        foreach ($myCar as $x => $y) {
            echo "$x: $y <br>";
        }
        ?> -->

<!-- <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $x) {
            if ($x == "blue") $x;
        }
        var_dump($colors);
        ?> -->

<!-- <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $x) :
            echo "$x <br>";
        endforeach;
        ?>

<?php
$fruits = array("apple", "banana", "orange");
// Using a foreach loop

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>

<?php
// Array of fruits

$fruits = array("apple", "banana", "orange");

// Using a for loop

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}
?> -->