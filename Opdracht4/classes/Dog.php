<?php

     class Dog extends Animal {
        
        public function intro(): string
        {
            return "I'm a " . $this->name . ", i bark!";
        }
    }