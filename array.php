<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional statment</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            margin : auto;
            background-color: antiquewhite;
            padding: 23px;
            max-width: 80%;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>this is if Array and Loops</h1>
        <?php
       $list = array("Python","C++","C","PHP");
        echo $list[0];
        echo $list[1];
        echo"<br><h1>while loop strat form here</h1>";
       

        // Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($list)) {
        echo "<br>The value of language is: ";
        echo $list[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($list as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

        ?>

    </div>
    
</body>
</html>