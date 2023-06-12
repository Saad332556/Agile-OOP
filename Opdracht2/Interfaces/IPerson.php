<?php 

interface IPerson {
    // set-functies (magic method __set)
    public function __set($property, $value);
    // magic method __get
    public function __get($property);

    // constructor
    public function __construct($firstname, $infix, $lastname);

}