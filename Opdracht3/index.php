<?php 
    include("./classes/Person.php");
    include("./classes/Student.php");

    $student = new Student("Saad", "", "Benaissa", 335226, "2109C");

    echo $student->sayHello();