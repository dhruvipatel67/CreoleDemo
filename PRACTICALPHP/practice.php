<!-- <?php
        // Check if the type of a variable is integer   
        $x = 5985;
        var_dump(is_int($x));
        echo "<br>";

        // Check again... 
        $x = 59.85;
        var_dump(is_int($x));
        ?>-->
<!-- 
<?php
// Check if the type of a variable is float 
$a = 10.365;
var_dump(is_float($a));
?> -->

<!-- <?php
        // Check if a numeric value is finite or infinite 
        $x = 1.9e411;
        var_dump($x);
        ?> -->

<!-- <?php
        // Invalid calculation will return a NaN value
        $x = acos(8);
        var_dump($x);
        ?> -->

<!-- <?php
        // Check if the variable is numeric   
        $x = 5985;
        var_dump(is_numeric($x));
        echo "<br>";

        $x = "5985";
        var_dump(is_numeric($x));
        echo "<br>";

        $a = "59.85" + 10;
        var_dump(is_numeric($a));
        echo "<br>";

        $x = "Hello";
        var_dump(is_numeric($x));
        ?> -->

<!-- <?php
        // Cast float to int 
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";
        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";
        $x = 23465.768;
        $int_cast = intval($x);
        echo $int_cast;

        ?> -->

<!-- <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean
        $e = NULL;    // NULL
        $f = "25 kilometers"; // String
        $g = "2.5 meters";
        $h = "";      // String
        $i = -1;      // Integer

        $a = (int) $a;
        $b = (float) $b;
        $c = (string) $c;
        $d = (string) $d;
        $e = (string) $e;
        $f = (int) $f;
        $g = (float) $g; // String
        $h = (bool) $h; // Boolean
        $i = (bool) $i; // Integer

        //To verify the type of any object in PHP, use the var_dump() function:
        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        echo "<br>";
        var_dump($e);
        echo "<br>";
        var_dump($f);
        echo "<br>";
        var_dump($g);
        echo "<br>";
        var_dump($h);
        echo "<br>";
        var_dump($i);
        ?> -->

<!-- <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean

        $a = (array) $a;
        $b = (array) $b;
        $c = (array) $c;
        $d = (array) $d;

        var_dump($a);
        echo "<br>";
        var_dump($b);
        echo "<br>";
        var_dump($c);
        echo "<br>";
        var_dump($d);
        ?> -->

<!--<?php
    // case-sensitive constant name
    define("Hello", "Welcome Everyone");
    echo Hello;
    ?> -->

<!-- <?php
        const MYCAR = ("toyota");
        echo MYCAR;
        ?> -->

<!-- <?php
        define("cars", [
            "Alcazar",
            "BMW",
            "Mercedes benz"
        ]);
        echo cars[0];
        echo "<br>";
        echo cars[2];
        ?> -->

<!-- <?php
        define("GREETING", "Welcome to W3Schools.com!");
        function myTest()
        {
            echo GREETING;
        }
        myTest();
        echo "<br>";
        ?> -->

<!-- <?php
        class Math
        {
            const PI = 3.14159;
            function calculateArea($radius)
            {
                return self::PI * ($radius * $radius);
            }
        }
        $math = new Math();
        echo $math->calculateArea(5);
        ?> -->

<!-- <?php
        class Fruits
        {
            public function myValue()
            {
                return __CLASS__;
            }
        }
        $kiwi = new Fruits();
        echo $kiwi->myValue();
        ?> -->

<!-- <?php
        echo __FILE__;
        ?> -->

<!-- <?php
        function myValue()
        {
            return __FUNCTION__;
        }
        echo myValue();
        ?> -->

<!-- <?php
        echo __LINE__;
        ?> -->
<!-- 
<?php
class Fruit
{
    public function myValue()
    {
        return __METHOD__;
    }
}
$kiwi = new Fruit();
echo $kiwi->myValue();
?> -->


<!-- <?php
        $x = 10;
        $y = 6;
        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";
        echo $x ** $y;

        ?> -->

<!-- <?php
        $x = 100;
        $y = "100";

        var_dump($x == $y);
        echo "<br>";
        var_dump($x === $y);
        echo "<br>";
        var_dump($x != $y);
        echo "<br>";
        var_dump($x <> $y);
        echo "<br>";
        var_dump($x !== $y);
        echo "<br>";
        var_dump($x > $y);
        echo "<br>";
        var_dump($x < $y);
        echo "<br>";
        var_dump($x >= $y);
        echo "<br>";
        var_dump($x <= $y);
        ?> -->

<!-- <?php
        $x = 5;
        $y = 10;

        echo ($x <=> $y); // returns -1 because $x is less than $y
        echo "<br>";

        $x = 10;
        $y = 10;

        echo ($x <=> $y); // returns 0 because values are equal
        echo "<br>";

        $x = 15;
        $y = 10;

        echo ($x <=> $y); // returns +1 because $x is greater than $y
        ?> -->

<!-- <?php
        $x = 10;
        $y = 10;
        $z = 10;
        $w = 10;
        echo ++$x;
        echo "<br>";
        echo $y++;
        echo "<br>";
        echo --$z;
        echo "<br>";
        echo $w--;
        ?> -->

<!-- <?php
        // if empty($user) = TRUE, set $status = "anonymous"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
        echo ("<br>");

        $user = "John Doe";
        // if empty($user) = FALSE, set $status = "logged in"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
        ?> -->

<!-- <?php
        $user = "TD";
        echo $user = "$user" ?? "anonymous";
        echo ("<br>");

        // variable $color is "red" if $color does not exist or is null
        echo $color = $color ?? "red";
        echo ("<br>");
        ?>

<?php
echo $users = $users ?? "anonymous";
echo ("<br>");

$color = "GREEN";
// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
?> -->

<!-- <?php
        $x = "GeeksforGeeks ";
        $y = "Computer science portal";
        echo $x, $y;
        ?>


<?php
$x = "GeeksforGeeks";
print $x;
?>


<?php
$arr = array(
    '0' => "GeeksforGeeks",
    '1' => "Computer",
    '2' => "Science",
    '3' => "Portal"
);

print_r($arr);
?>  -->