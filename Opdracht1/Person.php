<?php

    class Person {
        // properties / fields
        private $firstname;
        private $infix;
        private $lastname;

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
        public function __construct($firstname, $infix, $lastname) {
            $this->firstname = $firstname;
            $this->infix = $infix;
            $this->lastname = $lastname;
        }

        // method
        public function sayHello() {
            return "Hi, my name is: " . $this->firstname . " " . $this->infix . " " . $this->lastname . ".";
        }
    }