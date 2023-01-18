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
    echo 'Conditional Statements';
    ?>
    <br>
    <br>
    <div>
      <?php 
      $price = 20;
      if ($price < 50) {
        # code...
        echo 'If condition is met';
      } elseif ($price < 30) {
        # code...
        echo 'elseif condition is met';
      } else {
        # code...
        echo 'Condition is not met';
      }
      ?>
    </div>
    <br>
    <div>
        <?php 
        $pongal_Things = [
            ['name' => 'karumbu' , 'price' => 20],
            ['name' => 'manjal' , 'price' => 10],
            ['name' => 'gopi poondu' , 'price' => 15],
            ['name' => 'poola poo' , 'price' => 5],
            ['name' => 'unnan godi' , 'price' => 40],
            ['name' => 'veepilai' , 'price' => 2]
        ];
        foreach($pongal_Things as $pongal){
            // logical AND operator &&
            // if ($pongal['price'] < 15 && $pongal['price'] > 2) {
            //     # code...
            //     echo $pongal['name'] . '<br/>';
            // }

            // logical OR operator ||
            // if ($pongal['price'] > 20 && $pongal['price'] < 10) {
            //     # code...
            //     echo $pongal['name'] . '<br/>';
            // }
        }
        
        ?>
    </div>
    <br>
    <div>
        <ul>
        <?php foreach($pongal_Things as $pongal){?>
           <?php if($pongal['name'] > 15){?>
           <li><?php echo $pongal['name'];?></li>
           <?php }?>
        <?php }?>
        </ul>
    </div>
</body>
</html>



