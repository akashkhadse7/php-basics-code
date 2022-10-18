<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>operator in php</h1></center>
    __________________________________________
    <h2>Arithatic Oerators</h2>
    <h2>Assignent Operators</h2>
    <h2>Comparison Operators</h2>
    <h2>Increment/Decrement Operators</h2>
    <h2>Logical Operators</h2>
    _______________________________________________________________________________________________________<br>
    <?php
    $var1 = 15;
    $var2 = 25;
    echo "var1 value is:- ",$var1;
    echo "<br>var2 value is:- ",$var2;
    echo "<br><h2>Arithamatic operator</h2> <br>";
    echo "var1 + var2 = ";
    echo $var1+$var2;
    echo "<br>";

    echo "var1 - var2 = ";
    echo $var1-$var2;
    echo "<br>";

    echo "var1 * var2 = ";
    echo $var1*$var2;
    echo "<br>";

    echo "var1 / var2 = ";
    echo $var1/$var2;
    echo "<br>";

    echo "var1 % var2 = ";
    echo $var1%$var2;
    echo "<br>";


    //Assignent Operators
    echo "<h2>Assignent Operators</h2><br>";
    $newvar = $var1;
    echo "<br>",$newvar; 
    $newvar +=10;
    echo "<br>",$newvar; 
    $newvar -=5;
    echo "<br>",$newvar; 
    $newvar*=10;
    echo "<br>",$newvar; 
    $newvar/=10;
    echo "<br>",$newvar; 

   

    
    ?>
</body>
</html>