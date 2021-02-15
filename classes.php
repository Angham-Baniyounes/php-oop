<?php
    // class : is a templeate for objects | object : is an instance of class
    class Fruit {
        public $name;
        public $color;

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_color($color) {
            $this->color = $color;
        }

        function get_color() {
            return $this->color;
        }
    }
    $apple = new Fruit();
    $apple->set_name("Apple");
    echo $apple->get_name();
    echo "<br>";
    $banana = new Fruit();
    $banana->set_name("Banana");
    echo $banana->get_name();
    $banana->set_color("yellow");
    echo " : {$banana->get_color()}";
    echo "<br>";
    $orange = new Fruit();
    echo $orange->name = "Orange";
    var_dump($orange instanceof Fruit);
?>