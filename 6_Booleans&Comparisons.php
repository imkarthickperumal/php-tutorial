<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo 'Booleans & Comparisons';
    ?>
    <br>
    <br>
    <div>
        <?php 
        // Comparisons booleans (true or false)
        echo true; // 1
        echo false; // 0

        // numbers
        echo 5 < 10;
        echo 5 > 10;
        echo 5 == 10;
        echo 10 == 10;
        echo 5 != 10;
        echo 5 <= 10;
        echo 5 >= 10; 
        ?>
    </div>
    <br>
    <div>
        <?php 
         // string
         echo 'dharmapuri' < 'karthick'; 
         echo 'dharmapuri' > 'karthick'; 
         echo 'dharmapuri' > 'Dharmapuri'; 
         echo 'dharmapuri' == 'dharmapuri'; 
         echo 'dharmapuri' == 'Dharmapuri'; 
         ?>
    </div>

    <br>
    <div>
        <?php 
         // loose vs strict comparision
         echo 5 == '5'; 
         echo 5 === '5'; 
         echo 5 === 5; 

         echo true == "1";
         echo false == "";
         ?>
    </div>
</body>
</html>