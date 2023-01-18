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
    $favourite_Actor = 'AK';
    switch ($favourite_Actor) {
        case 'AK':
            # code...
            echo 'My Favourite actor AK';
            break;
        case 'Vijay':
            echo 'Just a actor';
            break;
        default:
            # code...
            echo 'No data on the switch case';
            break;
    }
    ?>
</body>
</html>