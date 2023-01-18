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
    echo 'Loops';
    ?>
    <br>
    <br>
    <div>
        <?php 
        // for loop
        $centre = ['Codd','Tech','Australia'];
        for($i = 0; $i < count($centre); $i++){
            echo $centre[$i] . '<br/>';
        }
        ?>
    </div>
    <br>
    <div>
        <?php 
        // foreach loop
        $centre_One = ['Australia', 'Codd', 'Tech'];
        foreach($centre_One as $centreOne){
            echo $centreOne . '<br/>';
        }
        ?>
    </div>
    <br>
    <div>
        <?php 
        // multidimensional array implementational loops
        $pongal_Things = [
            ['name' => 'karumbu' , 'price' => 10],
            ['name' => 'manjal' , 'price' => 20],
            ['name' => 'gopi poondu' , 'price' => 30],
            ['name' => 'poola poo' , 'price' => 40],
            ['name' => 'unnan godi' , 'price' => 50],
        ];
        // foreach loops
        // foreach($pongal_Things as $pongal){
        //     echo $pongal['name'] . '-' . $pongal['price'];
        //     echo '<br/>';
        // }

        // while loop => only inside loop have a 2. conditon res of 1. initialize & 3. Increment/decrement outside of the loops
        // $i = 0 ;
        // while ($i < count($pongal_Things)) {
        //     # code...
        //     echo $pongal_Things[$i]['name'];
        //     echo '<br/>';
        //     $i++;
        // }
        ?>
    </div>
    <div>
        <h1>Products</h1>
        <ul>
            <?php foreach($pongal_Things as $pongal){ ?>
            <h4><?php echo $pongal['name'];?></h4>
            <h4>₹<?php echo $pongal['price'];?></h4>
            <?php } ?>
        </ul>
    </div>
</body>
</html>