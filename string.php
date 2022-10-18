<?php
$strg = "Akash is programmer";
echo "<br>".$strg;
echo "<br><br>";

//strlen is use to check how many carector present in string it return int value
echo "strlen is use to chenk length of sting<br><br>";
$leng = strlen($strg);

//. is use to concatinate the string
echo "lenght of strg is:= ". $leng ."<br>thank you<br><br>";

echo "str_word_count() is use to count no.of words";
echo "<br>this function is use to count no.of words present is variable string<br><br>";
echo "strg have :=".str_word_count($strg)." words <br>thank you<br><br>";

//strrev() is use to reversed the string persent in variable
echo "strrev() is use to reversed the string<br>";
echo "strg string is now reversed:=".strrev($strg);

//strpos() is use to find the word present in the string variable 
echo "<br><br>strpos() is use to find the word present in the sting variable i.e strg<br>";
echo "Akash is programmer := ".strpos($strg,'is');

echo "<br><br> str_replace() is use to replace the string present in the variable";
echo "<br>Akash is programmer := ".str_replace('is','the',$strg)."thank you<br>"

?>