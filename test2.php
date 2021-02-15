<?php 
    // Properties : Id Name Email mobile_number
    // For student class use dummy data for student id : 123443 email:eva@orange.com name : Sara mobile_number :0777777777
    class Student {
        public $Id;
        public $Name;
        public $Email;
        public $mobile_number;
        function __construct($Id, $Name, $Email, $mobile_number) {
            $this->Id            = $Id;
            $this->Name          = $Name;
            $this->Email         = $Email;
            $this->mobile_number = $mobile_number;
            // $this->get_data();
        }
        function get_name(){
            return $this->Name;
        }
        function get_mobile() {
            return $this->mobile_number;
        }
        function get_data() {
            echo "Data For Student <br>";
            echo "Id : {$this->Id} <br>";
            echo "Name : {$this->Name} <br>";
            echo "Email : {$this->Email} <br>";
            echo "Mobile Number : {$this->mobile_number}<br>";
        }

    }

    // For teacher Class use dummy data 
    // id : 96432 
    // name : Sadi 
    // email:adam@orange.com 
    // mobile_number :0777788888 
    // salary : 800 
    // subject : [English, Arabic, Math, science]
    class Teacher extends Student {
        // Salary subjects
        Public $Salary;
        Public $Subject;

        function __construct($Id, $Name, $Email, $mobile_number, $Salary, $Subject) {
            parent::__construct($Id, $Name, $Email, $mobile_number);
            // $this->Id            = $Id;
            // $this->Name          = $Name;
            // $this->Email         = $Email;
            // $this->mobile_number = $mobile_number;
            $this->Salary        = $Salary;
            $this->Subject       = $Subject;
            $this->get_data();
        }

        function get_salary() {
            return $this->Salary;
        }

        function get_subject($sub) {
            if(is_array($sub)) {
                $this->subject = $sub;
                foreach($this->subject as $v) {
                    echo $v." , ";
                }
            } else {
                echo $this->subject = $sub;
            }
        }

        function get_data() {
            echo "Data For Teacher <br>";
            echo "Id : {$this->Id} <br>";
            echo "Name : {$this->Name} <br>";
            echo "Email : {$this->Email} <br>";
            echo "Mobile Number : {$this->mobile_number}<br>";
            echo "Salary : {$this->Salary} <br>";
            // echo "Subject : {$this->Subject}<br>";
            echo "Subject : ";
            $this->get_subject($this->Subject);
        }

    }

    // $angham = new Student();
    // echo $angham->get_name("Angham");
    // echo "<br>";
    // $nagham = new Teacher();
    // echo $nagham->get_subject(["English", "Arabic", "Math", "science"]);
    // echo "<br>";
    // echo $nagham->get_subject("English");
    echo "<br>";
    $std = new Student("1311", "Angham", "angham.baniyounes@gmail.com", "0776084114");
    echo "<br> <hr>";
    $teach = new Teacher("1113", "Nagham", "nagham.baniyounis@gmail.com", "0776084114", "800", ["English", "Arabic", "Math", "science"]);

?>