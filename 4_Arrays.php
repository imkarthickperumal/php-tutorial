<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Arrays</h3>
    <?php 
    // echo "Arrays";
    ?>
    <h3>Indexted Arrays</h3>
    <div>
        <?php 
        // basics of array & print
        $movies = ['Thunivu','Varisu','Veera simma reddy'];
        // echo $movies;
        print_r($movies);
        ?>
    </div>

    <div>
        <?php 
        // finding index value
        echo $movies[2];
        ?>
    </div>

    <div>
        <?php 
        // another way to working with array
        $movie_Actors = array('Thala','Thalapathy','Balaya');
        print_r($movie_Actors);
        ?>
    </div>

    <div>
        <?php 
        // numbers array
        $movie_Ticket = [150, 130, 200];
        print_r($movie_Ticket);
        ?>
    </div>
    
    <div>
        <?php 
        // Index of the element replacing
        $movie_Actors[0] = 'AK Thala';
        print_r($movie_Actors); 
        ?>
    </div>

    <div>
        <?php 
        // Empty array added last index 
        $movie_Actors[] = 'Ilaya Thalapathy';
        print_r($movie_Actors); 
        ?>
    </div>

    <div>
        <?php 
        // Adding one element array
        array_push($movie_Actors, 'Balaya krishnan');
        print_r($movie_Actors);
        ?>
    </div>

    <div>
        <?php 
        // Adding count
        echo count($movie_Actors);
        ?>
    </div>

    <div>
        <?php 
        // merge two arrays
        $merge_Arrays = array_merge($movie_Actors, $movie_Ticket);
        print_r($merge_Arrays);
        ?>
    </div>

    <br>

    <h3>Associative Arrays (key & value)pairs is called Associative Array</h3>
    <div>
        <?php 
        // declare key value 
        $movie_Actor = ['Thunivu'=>'Thala', 'Varisu'=>'Thalapathy','Veera Simma Reddy'=>'Balaya'];
        print_r($movie_Actor);
        ?>
    </div>

    <div>
        <?php 
        // another declare key value 
        $movie_Actor = array('Thunivu'=>'Thala', 'Varisu'=>'Thalapathy','Veera Simma Reddy'=>'Balaya');
        print_r($movie_Actor);
        ?>
    </div>

    <div>
        <?php 
        // add key value 
        $movie_Actor['Onum illa'] = 'Avlotha' ;
        print_r($movie_Actor);
        ?>
    </div>

    <br>
    <h3>PHP Multidimensional Arrays</h3>
    <div>
        <?php 
        $movie_Details = [
            ['moviename'=>'Thunivu', 'actor'=>'Thala', 'collection'=> '30cr'],
            ['moviename'=>'Varisu', 'actor'=>'Thalapathy', 'collection'=> '28cr'],
        ];
        print_r($movie_Details);
        ?>
    </div>

    <div>
        <?php 
        $movie_Details = [
            ['moviename'=>'Veera simma reddy', 'actor'=>'Balayaa', 'collection'=> '50cr']];
        print_r($movie_Details);
        ?>
    </div>

    <div>
        <?php 
        $popped = array_pop($movie_Details);
        print_r($popped);
        ?>
    </div>
</body>
</html>