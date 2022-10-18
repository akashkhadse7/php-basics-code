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
    define ('PI',3.14);
    //integer
    $num = 10;
    echo var_dump($num);
    echo "<br>";
    
    // string 
    $str = "Akash";
    echo var_dump($str);
    echo "<br>";

    // bool 
    $bol = true;
    echo var_dump($bol);
    echo "<br>";

    // float 
    $flt = 27.7;
    echo var_dump($flt);
    echo "<br>";

    // array 
    $arr = array(12,'akash',12.2,true);
    echo var_dump($arr);
    echo "<br>";
    // object 

    //const variable
    echo (PI);

  ?>
</body>
</html>