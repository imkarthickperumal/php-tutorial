<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Strings</h3>
    <?php
    // echo 'Strings'; 
    $email = 'my email is ';
    $emailId = 'karthick@gmail.com';
    $name = 'karthick';
    $district = 'Dharmapuri';
    ?>

    <div><?php echo $email . $emailId; ?></div>
    <div><?php echo 'My name is ' . $name; ?></div>
    <div><?php echo "My district is a $district";?></div>
    
    <div> 
        <?php 
         // Highlighting character 
         echo "Hi How are you \"Im fine\"";
         echo 'And you are you "Im to good"';
        ?>
    </div>

    <div>
        <?php
        // some in-build string methods
         echo $district[3];
         echo strlen($district);
         echo strtoupper($district);
         echo strtolower($district);
         echo str_replace('d','t',$district);
        ?>
    </div>

</body>
</html>