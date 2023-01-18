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
    echo 'Functions';
    ?>
    <br>
    <br>
    <div>
        <?php 
        // create simple functions
        function sayHello($name = 'Ajith'){ // Ajith is overridding when you pass no arguments directly import parameter
            echo "Hallo $name How are you";
        }
        sayHello('Karthick');
        ?>
    </div>
    <br>
    <div>
        <?php 
        function formatProduct($product){
            // echo "{$product['name']} fruit costs ₹{$product['price']} to buy <br/>"; what comparision echo & return why not used return
            return "{$product['name']} fruits costs ₹{$product['price']} to buy <br/>";
        }
        // formatProduct(['name'=>'Orange', 'price'=>'20']);
        $format = formatProduct(['name'=>'Orange', 'price'=>'20']);
        echo $format;
        ?>
    </div>
</body>
</html>