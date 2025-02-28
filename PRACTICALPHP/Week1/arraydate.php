<!-- ARRAY FUNCTIONS -->
<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "<br>";
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars = array("Mercedes benz", "BMW", "Alcazar");
        echo count($cars);
        ?> -->

<!-- <?php
        $cars = array("Harrier", "XUV 700", "Toyota");
        echo $cars[0];
        ?> -->

<!-- <?php
        $cars = ["Volvo", "BMW", "Toyota"];
        $cars[2] = "Ford";
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";

        array_push($cars, "Ford");
        var_dump($cars);
        ?> -->

<!-- <?php
        $car = array("Brand" => "Volvo", "Model" => "XC90", "Year" => 2019);
        $car["Year"] = 2024;
        var_dump($car);
        ?> -->

<!-- <?php
        $cars = [
            0 => "Creta",
            7 => "BMW",
            9 => "XUV 700"
        ];
        var_dump($cars);
        ?> -->

<!-- <?php
        $myCar = [];
        $myCar["brand"] = "Ford";
        $myCar["model"] = "Mustang";
        $myCar["year"] = 1964;
        var_dump($myCar);
        echo "<br>";
        echo "<br>";

        $cars = [];
        $cars[0] = "Volvo";
        $cars[1] = "BMW";
        $cars[2] = "Toyota";
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars = array("brand" => "Ford", 'model' => 'Mustang', "year" => 1964);
        echo $cars["model"];
        echo "<br>";
        echo $cars['brand'];
        ?> -->

<!-- <?php
        $fruits = array("Apple", "Banana", "Cherry");
        $fruits[] = "Orange";

        //Output the array:
        var_dump($fruits);
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        array_splice($cars, 1, 2);
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        unset($cars[1]);
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        unset($cars[0], $cars[1]);
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
        unset($cars["model"]);
        var_dump($cars);
        ?> -->

<!-- <?php
        $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
        $newarray = array_diff($cars, [1964]);
        var_dump($newarray);
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?> -->

<!-- <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        print_r(array_change_key_case($age, CASE_UPPER));
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel");
        print_r(array_chunk($cars, 2));
        ?> -->

<!-- <?php
        // An array that represents a possible record set returned from a database
        $a = array(
            array(
                'id' => 5698,
                'first_name' => 'Peter',
                'last_name' => 'Griffin',
            ),
            array(
                'id' => 4767,
                'first_name' => 'Ben',
                'last_name' => 'Smith',
            ),
            array(
                'id' => 3809,
                'first_name' => 'Joe',
                'last_name' => 'Doe',
            )
        );

        $last_names = array_column($a, 'last_name');
        print_r($last_names);
        ?> -->

<!-- <?php
        $fname = array("Peter", "Ben", "Joe");
        $age = array("35", "37", "43");
        $c = array_combine($fname, $age);
        print_r($c);
        ?> -->


<!-- <?php
        $a = array("A", "Cat", "Dog", "A", "Dog");
        print_r(array_count_values($a));
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("e" => "red", "f" => "green", "g" => "blue");

        $result = array_diff($a1, $a2);
        print_r($result);
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "b" => "green", "c" => "blue");

        $result = array_diff_assoc($a1, $a2);
        print_r($result);
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue");
        $a2 = array("a" => "red", "c" => "blue", "d" => "pink");

        $result = array_diff_key($a1, $a2);
        print_r($result);
        ?> -->

<!-- <?php
        $a1 = array_fill(3, 4, "blue");
        print_r($a1);
        ?> -->

<!-- <?php
        $keys = array("a", "b", "e", "d");
        $a1 = array_fill_keys($keys, "blue");
        print_r($a1);
        ?> -->

<!-- <?php
        function test_odd($var)
        {
            return ($var & 1);
        }

        $a1 = array(1, 3, 2, 3, 4);
        print_r(array_filter($a1, "test_odd"));
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $result = array_flip($a1);
        print_r($result);
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("e" => "red", "f" => "green", "g" => "blue");

        $result = array_intersect($a1, $a2);
        print_r($result);
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "red", "b" => "green", "e" => "blue");

        $result = array_intersect_assoc($a1, $a2);
        print_r($result);
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue");
        $a2 = array("e" => "red", "c" => "blue", "d" => "pink");

        $result = array_intersect_key($a1, $a2);
        print_r($result);
        ?> -->

<!-- <?php
        function myfunction($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }

        $a1 = array("a" => "red", "b" => "green", "c" => "blue");
        $a2 = array("d" => "red", "b" => "green", "e" => "blue");

        $result = array_intersect_uassoc($a1, $a2, "myfunction");
        print_r($result);
        ?> -->

<!-- <?php
        function my($a, $b)
        {
            if ($a === $b) {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }

        $a1 = array("a" => "red", "b" => "green", "c" => "blue");
        $a2 = array("a" => "blue", "b" => "black", "e" => "blue");

        $result = array_intersect_ukey($a1, $a2, "my");
        print_r($result);
        ?> -->

<!-- <?php
        $a = array("Volvo" => "XC90", "BMW" => "X5");
        if (array_key_exists("Volvo", $a)) {
            echo "Key exists!";
        } else {
            echo "Key does not exist!";
        }
        ?> -->

<!-- <?php
        $a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
        print_r(array_keys($a));
        ?> -->

<!-- <?php
        function m1($v)
        {
            return ($v * $v);
        }

        $a = array(1, 2, 3, 4, 5);
        print_r(array_map("m1", $a));
        ?> -->

<!-- <?php
        $a1 = array("red", "green");
        $a2 = array("blue", "yellow");
        print_r(array_merge($a1, $a2));
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green");
        $a2 = array("c" => "blue", "b" => "yellow");
        print_r(array_merge_recursive($a1, $a2));
        ?> -->

<!-- <?php
        $a = array("Dog", "Cat", "Horse", "Bear", "Zebra");
        array_multisort($a);
        print_r($a);
        ?> -->

<!-- <?php
        $a = array("red", "green");
        print_r(array_pad($a, 5, "blue"));
        ?> -->

<!-- <?php
        $a = array(5, 5);
        echo (array_product($a));
        ?> -->

<!-- <?php
        $a = array("red", "green");
        array_push($a, "blue", "yellow");
        print_r($a);
        ?> -->

<!-- <?php
        $a1 = array("a" => array("red"), "b" => array("green", "blue"),);
        $a2 = array("a" => array("yellow"), "b" => array("black"));
        print_r(array_replace_recursive($a1, $a2));
        ?> -->

<!-- <?php
        $a = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
        print_r(array_reverse($a));
        ?> -->

<!-- <?php
        $a = array("a" => "red", "b" => "green", "c" => "blue");
        echo array_search("red", $a);
        ?> -->

<!-- <?php
        $a = array("a" => "red", "b" => "green", "c" => "blue");
        echo array_shift($a);
        print_r($a);
        ?> -->

<!-- <?php
        $a = array("red", "green", "blue", "yellow", "brown");
        print_r(array_slice($a, 2));
        ?> -->

<!-- <?php
        $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
        $a2 = array("a" => "purple", "b" => "orange");
        array_splice($a1, 0, 2, $a2);
        print_r($a1);
        ?> -->

<!-- <?php
        $a = array(5, 15, 25);
        echo array_sum($a);
        ?> -->

<!-- <?php
        $a = array("a" => "red", "b" => "green", "c" => "red");
        print_r(array_unique($a));
        ?> -->

<!-- <?php
        $a = array("a" => "red", "b" => "green");
        array_unshift($a, "blue");
        print_r($a);
        ?> -->

<!-- <?php
        $a = array("Name" => "Peter", "Age" => "41", "Country" => "USA");
        print_r(array_values($a));
        ?> -->

<!-- <?php
        function trail($value, $key)
        {
            echo "The key $key has the value $value<br>";
        }
        $a = array("a" => "red", "b" => "green", "c" => "blue");
        array_walk($a, "trail");
        ?> -->

<!-- <?php
        function demoo($value, $key)
        {
            echo "The key $key has the value $value<br>";
        }
        $b1 = array("a" => "red", "b" => "green");
        $a2 = array($b1, "1" => "blue", "2" => "yellow");
        array_walk_recursive($a2, "demoo");
        ?> -->

<!-- <?php
        $firstname = "Peter";
        $lastname = "Griffin";
        $age = "41";

        $result = compact("firstname", "lastname", "age");

        print_r($result);
        ?> -->

<!-- <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        ?> -->

<!-- <?php
        $people = array("Peter", "Joe", "Glenn", "Cleveland");
        echo current($people) . "<br>";
        ?> -->

<!-- <?php
        $people = array("Peter", "Joe", "Glenn", "Cleveland");

        echo current($people) . "<br>";
        echo end($people);
        ?> -->

<!-- <?php
        $a = "Original";
        $my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");
        extract($my_array);
        echo "\$a = $a; \$b = $b; \$c = $c";
        ?> -->

<!-- <?php
        $people = array("Peter", "Joe", "Glenn", "Cleveland");
        echo current($people) . "<br>";
        echo next($people);
        ?> -->

<!-- <?php
        $number = range(0, 5);
        print_r($number);
        ?> -->

<!-- <?php
        $people = array("Peter", "Joe", "Glenn", "Cleveland");

        echo current($people) . "<br>";
        echo next($people) . "<br>";

        echo reset($people);
        ?> -->

<!-- <?php
        $my_array = array("red", "green", "blue", "yellow", "purple");

        shuffle($my_array);
        print_r($my_array);
        ?> -->

<!-- DATE FUNCTIONS -->
<!-- <?php
        var_dump(checkdate(12, 31, -400));
        echo "<br>";
        var_dump(checkdate(2, 29, 2003));
        echo "<br>";
        var_dump(checkdate(2, 29, 2004));
        ?> -->

<!-- <?php
        $date = date_create("2013-03-15");
        date_add($date, date_interval_create_from_date_string("40 days"));
        echo date_format($date, "Y-m-d");
        ?> -->

<!-- <?php
        $d = date_create_from_format("j-M-Y", "15-Mar-2013");
        ?> -->

<!-- <?php
        $date = date_create("2013-03-15");
        echo date_format($date, "Y/m/d");
        ?> -->

<!-- <?php
        $date = date_create();
        date_date_set($date, 2020, 10, 30);
        echo date_format($date, "Y/m/d");
        ?> -->

<!-- <?php
        echo date_default_timezone_get();
        ?> -->

<!-- <?php
        date_default_timezone_set("Asia/Bangkok");
        echo date_default_timezone_get();
        ?> -->

<!-- <?php
        $date1 = date_create("2013-03-15");
        $date2 = date_create("2013-12-12");
        $diff = date_diff($date1, $date2);
        echo $diff->format("%R%a days");
        ?> -->

<!-- <?php
        $date = date_create("2013-03-15");
        echo date_format($date, "Y/m/d H:i:s");
        ?> -->

<!-- <?php
        date_create("gyuiyiuyui%&&/");
        print_r(date_get_last_errors());
        ?> -->

<!-- <?php
        $date = date_create('2019-01-01');
        date_add($date, date_interval_create_from_date_string('1 year 35 days'));
        echo date_format($date, 'Y-m-d');
        ?> -->

<!-- <?php
        $date1 = date_create("2013-01-01");
        $date2 = date_create("2013-02-10");
        $diff = date_diff($date1, $date2);

        // %a outputs the total number of days
        echo $diff->format("Total number of days: %a.");
        ?> -->

<!-- <?php
        $date = date_create("2013-05-01");
        date_modify($date, "+15 days");
        echo date_format($date, "Y-m-d");
        ?> -->

<!-- <?php
        $winter = date_create("2013-12-31", timezone_open("Europe/Oslo"));
        $summer = date_create("2013-06-30", timezone_open("Europe/Oslo"));

        echo date_offset_get($winter) . " seconds.<br>";
        echo date_offset_get($summer) . " seconds.";
        ?> -->

<!-- <?php
        print_r(date_parse_from_format("mmddyyyy", "05122013"));
        ?> -->

<!-- <?php
        print_r(date_parse("2013-05-01 12:30:45.5"));
        ?> -->

<!-- <?php
        $date = date_create("2013-03-15");
        date_sub($date, date_interval_create_from_date_string("40 days"));
        echo date_format($date, "Y-m-d");
        ?> -->

<!-- 
<?php
$date = date_create();
echo date_timestamp_get($date);
?> -->

<!-- <?php
        $date = date_create();
        date_timestamp_set($date, 1371803321);
        echo date_format($date, "U = Y-m-d H:i:s");
        ?> -->

<!-- <?php
        $date = date_create("2013-05-25", timezone_open("Indian/Kerguelen"));
        echo date_format($date, "Y-m-d H:i:sP");
        ?> -->

<!-- <?php
        // Prints the day
        echo date("l") . "<br>";

        // Prints the day, date, month, year, time, AM or PM
        echo date("l jS \of F Y h:i:s A");
        ?> -->

<!-- <?php
        print_r(getdate());
        ?> -->

<!-- <?php
        // Print the array from gettimeofday()
        print_r(gettimeofday());

        // Print the float from gettimeofday()
        echo gettimeofday(true);
        ?> -->

<!-- <?php
        // Prints the day
        echo gmdate("l") . "<br>";

        // Prints the day, date, month, year, time, AM or PM
        echo gmdate("l jS \of F Y h:i:s A");
        ?> -->

<!-- <?php
        // Prints: October 3, 1975 was on a Friday
        echo "July 6, 2001 was on a " . date("l", gmmktime(0, 0, 0, 10, 3, 1975));
        ?> -->

<!-- <?php
        echo (gmstrftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
        setlocale(LC_ALL, "hu_HU.UTF8");
        echo (gmstrftime("%Y. %B %d. %A. %X %Z"));
        ?> -->

<!-- <?php
        echo idate("B") . "<br>";
        echo idate("d") . "<br>";
        echo idate("h") . "<br>";
        echo idate("H") . "<br>";
        echo idate("i") . "<br>";
        echo idate("I") . "<br>";
        ?> -->

<!-- <?php
        print_r(localtime());
        echo "<br><br>";
        print_r(localtime(time(), true));
        ?> -->

<!-- <?php
        echo (microtime());
        ?> -->

<!-- <?php
        // Prints: October 3, 1975 was on a Friday
        echo "Oct 3, 1975 was on a " . date("l", mktime(0, 0, 0, 10, 3, 1975));
        ?> -->

<!-- <?php
        echo (strftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
        setlocale(LC_ALL, "hu_HU.UTF8");
        echo (strftime("%Y. %B %d. %A. %X %Z"));
        ?> -->

<!-- <?php
        $format = "%d/%m/%Y %H:%M:%S";
        $strf = strftime($format);
        echo ("$strf");
        print_r(strptime($strf, $format));
        ?> -->
<!-- 
<?php
echo (strtotime("now") . "<br>");
echo (strtotime("3 October 2005") . "<br>");
echo (strtotime("+5 hours") . "<br>");
echo (strtotime("+1 week") . "<br>");
echo (strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo (strtotime("next Monday") . "<br>");
echo (strtotime("last Sunday"));
?> -->

<!-- <?php
        $t = time();
        echo ($t . "<br>");
        echo (date("Y-m-d", $t));
        ?> -->

<!-- <?php
        print_r(timezone_identifiers_list(256));
        ?> -->

<!-- <?php
        $tzlist = DateTimeZone::listAbbreviations();
        print_r($tzlist["acst"]);
        ?> -->

<!-- <?php
        $tz = timezone_open("Asia/Taipei");
        print_r(timezone_location_get($tz));
        ?> -->

<!-- <?php
        echo timezone_name_from_abbr("EST") . "<br>";
        echo timezone_name_from_abbr("", 7200, 0);
        ?> -->

<!-- <?php
        $tz = timezone_open("Europe/Paris");
        echo timezone_name_get($tz);
        ?> -->

<!-- <?php
        $tz = timezone_open("Asia/Taipei");
        $dateTimeOslo = date_create("now", timezone_open("Europe/Oslo"));
        echo timezone_offset_get($tz, $dateTimeOslo);
        ?> -->

<!-- <?php
        $tz = timezone_open("Europe/Paris");
        echo timezone_name_get($tz);
        ?> -->