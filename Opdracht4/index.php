<?php 

    include("classes/Animal.php");
    include("classes/Cat.php");
    include("classes/Dog.php");

    $cat = new Cat("Cat");
    echo $cat->intro();
    echo "<br>";
    echo "<br>";

    $dog = new Dog("Dog");
    echo $dog->intro();