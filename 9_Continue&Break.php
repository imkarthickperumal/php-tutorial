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
    echo "Continue & Break";
    ?>
    <br>
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
            if ($pongal['name'] === 'unnan godi') {
                # code...
                break;
            }
           if ($pongal['price'] > 15) {
            # code...
            continue;
           }
            echo $pongal['name'] . '<br/>';
        }
        ?>
    </div>
</body>
</html>