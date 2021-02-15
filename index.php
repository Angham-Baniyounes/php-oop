<?php 
    // Properties : Id Name Email mobile_number
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

    // For teacher Class 
    //Properties :  id, name, email, mobile_number, salary, subject : [English, Arabic, Math, science]
    class Teacher extends Student {
        Public $Salary;
        Public $Subject;

        function __construct($Id, $Name, $Email, $mobile_number, $Salary, $Subject) {
            parent::__construct($Id, $Name, $Email, $mobile_number);
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
                foreach($this->subject as $value) {
                    echo $value." | ";
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
            echo "Subject : ";
            $this->get_subject($this->Subject);
        }

    }

    echo "<br>";
    $std = new Student("1311", "Angham", "angham.baniyounes@gmail.com", "0776084114");
    $std->get_data();
    echo "<br> <hr>";
    $teacher = new Teacher("1113", "Nagham", "nagham.baniyounis@gmail.com", "0776084114", "800", ["English", "Arabic", "Math", "science"]);
    echo "<br> <hr>";
    $teacher2 = new Teacher("1113", "Nagham", "nagham.baniyounis@gmail.com", "0776084114", "800", "English");
?>