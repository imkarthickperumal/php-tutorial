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
    echo $_SERVER['SERVER_NAME'] . '<br/>';
    echo $_SERVER['REQUEST_METHOD'] . '<br/>';
    echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
    echo $_SERVER['PHP_SELF'] . '<br/>';
    ?>
</body>
</html>