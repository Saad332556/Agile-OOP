<?php
    class Student extends Person {
        // properties / fields
        private $studentNumber;
        private $class;

        // set-functies (magic method __set)
        public function __set($property, $value)
        {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }
        // magic method __get
        public function __get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }

        // constructor
        public function __construct($firstname, $infix, $lastname, $studentNumber, $class) {
            parent::__construct($firstname, $infix, $lastname);
            $this->studentNumber = $studentNumber;
            $this->class = $class;
        }

        // method
        public function sayHello() {
            return "Hi, my name is " . $this->firstname . " " . $this->infix . " " . $this->lastname . ", "
            . "my studentnumber is " . $this->studentNumber . " and i'm in class " . $this->class . ".";
        }
    }