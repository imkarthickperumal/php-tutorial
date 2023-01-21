<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        echo 'Ternary Operator';
        ?>
    </div>
    <br>
    <div>
        <?php 
        $score = 80;
        if ($score > 75) {
            echo 'High score!';
        } else {
            echo 'Low Score';
        }
        
        ?>
    </div>
    <br>
    <div>
        <?php 
        $score1 = 90;
        echo $score > 80 ? 'High Score!' : 'Low Score';
        ?>
        
    </div>
</body>
</html>