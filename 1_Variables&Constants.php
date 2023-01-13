<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Variables & Constants</h3>
    <?php 
    // echo 'Variables & Constants';
    $name = 'Karthick';
    $age = 25;
    $name = 'January'; // variable can change the value. so reassign the variable value
    define('NAME','Dharmapuri'); // value can't be reassign bcoz using define(keyword) - constant
    ?>
    <div><?php echo $name; ?></div>
    <div><?php echo $age; ?></div>
    <div><?php echo NAME; ?></div>
</body>
</html>