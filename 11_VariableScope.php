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
    echo "Variable Scope";
    ?>
    <br>
    <br>
    <div>
        <h3>Local Scope /  Local Variable</h3>
        <?php 
        // local scope
        // local variable =>Declare the variable Used only inside the function. like $name. only access inside the function it's called local scope
        function myFun(){
            $name = 'karthick';
            echo "My name is : $name <br/>";
        }
        myFun();
        
        function myFun2($age){
           echo $age;
        }
        myFun2("My age is : 25");
        ?>
    </div>
    <br>
    <div>
        <h3>Global Scope</h3>
        <?php 
        // Global scope
        // Global variable => when you declare global variable used global keyword & declare before the variable.
        $district = "Dharmapuri";
        function myDistrict(){
            global $district; 
            $district = "Thagadoor"; // value overridding
            echo "My District $district";
        }
        myDistrict();
        ?>
    </div>
</body>
</html>