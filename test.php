<?php
    //by Prg. Salameh Yasin
    class Person {
        private $age = 10;
        public $dept = "IT";
        const tax = 0.16;

        public function __constract() {
            echo self::tax;
            echo "Object is cleated";
        }
        public function say_hi() {
            echo "hello from inside a class <br>";
        }
        public function getAge() {
            return $this->age;
        }
    }
    class Boy extends Person {

        public function say_hi() {
            parent::say_hi();
            echo "Hello from child class";
        }
    }
?>