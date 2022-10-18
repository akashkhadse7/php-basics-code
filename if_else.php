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
        <h1>this is if else</h1>
        <?php
        $age = 18;
        if($age <= 15){
            echo "your perfect for the job role";
        }
        else if($age == 18){
            echo "you are p the post";

        }
        else{
            echo "try after 2022"; 
        }
        
        
        ?>

    </div>
    
</body>
</html>