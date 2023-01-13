<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Numbers</h3>
    <div>
        <?php
        echo 'Numbers'; 
        ?>
    </div>
    <br>
    <div>
        <?php
        // numbers datatype example
        $radius = 25;
        $pi = 3.14; 
        ?>
    </div>

    <div>
        <?php 
        // basics - *, /, +, -
        echo 'Basics';
        echo $pi * $radius ^ 2;
        ?>
    </div>

    <div>
        <?php 
        // order of operation (B I D M A S)
        echo 'order of operation';
        echo 2 * (4 + 8) / 6;
        ?>
    </div>

    <div>
        <?php
        // increment ++ , decrement -- operator
        echo 'Increment / Decrement operator';
        $radius++;
        echo $radius; 
        ?>
    </div>

    <div>
        <?php
        //shorthand operator
        $age = 20;
        // $age -= 20;
        $age +=20;
        echo $age; 
        ?>
    </div>

    <div>
        <?php 
        // number functions
        echo floor($pi); // only given by result before you set the value ex: 3.121 = 3
        echo ceil($pi); // only given by result complete set the value ex: 3.121 = 4
        echo pi(); // pi oda value like mathmatical operation
        ?>
    </div>
   
</body>
</html>