<!-- Define Objects
<?php
class Fruit
{
    // Properties
    public $name;
    public $color;
    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}
$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
?> -->

<!-- The $this Keyword -->
<!-- 1. Inside the class (by adding a set_name() method and use $this): -->
<!-- <?php
        class Fruits
        {
            public $n;
            function set_names($n)
            {
                $this->n = $n;
            }
        }
        $apple = new Fruits();
        $apple->set_names("ORANGE");
        echo $apple->n;
        ?> -->

<!-- 2. Outside the class (by directly changing the property value): -->
<!-- <?php
        class Car
        {
            public $cars;
        }
        $bmw = new Car();
        $bmw->cars = "Mercedes Benz";
        echo $bmw->cars;
        ?> -->

<!-- OOP - Destructor/Constructor -->
<!-- <?php
        class Hello
        {
            // Properties
            var $id;
            var $colors;
            // Methods
            function __construct($id, $colors)
            {
                $this->id = $id;
                $this->colors = $colors;
            }
            function __destruct()
            {
                echo "The fruit is {$this->id} and the color is {$this->colors}.";
            }
        }

        $none = new Hello("Apple", "red");
        ?> -->