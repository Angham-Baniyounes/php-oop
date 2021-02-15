<?php
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    class Audi extends Car {
        public function intro() : string {
            return "Choose German quality! I'm an $this->name !";
        }
    }
    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    //-----------------------------------------

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedih! I'm a $this->name!";
        }
    }
    $volvo = new Volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

     //-----------------------------------------
    
    class Citroen extends Car {
        public function intro() : string {
            return "French extravagance! I'm a $this->name!";
        }
    }
    $citroen = new Citroen("Citroen");
    echo $citroen->intro();
?>