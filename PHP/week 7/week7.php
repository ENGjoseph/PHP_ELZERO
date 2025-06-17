<?php
/*\
    String
    - Access Elements
    --- string is array of characters
    --- access elements by index "zero based indexing"
    --- negative index are allowed
    - Update elements 
    --- Update current elements
    --- add new elements
*/
$str = "joseph";
echo "first litter is $str[0]";
echo "<br>";
echo "3rd letter is $str[2]";
echo "<br>";
echo "4th litter is $str[3]";
echo "<br>";
echo "number of letters " . strlen($str);
echo "<br>";
echo "last litter is $str[-1]";
echo "<br>";
echo "last litter is {$str[strlen($str) - 1]}";
echo "<br>";
echo $str;
echo "<br>";
$str[0] = "J";
echo $str;
echo "<br>";
$str[8] = "g";
echo $str;
echo "<br>";
echo "=========================================================<br>";

/*
    string functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Delimiters[Required])
    */
echo lcfirst("Elzero web school");
echo "<br>";
echo lcfirst("elzero web school");
echo "<br>";
echo strtolower("ELZERO WEB SCHOOL");
echo "<br>";
echo strtoUPPER("elzero web school");
echo "<br>";
echo ucwords("elzero web|school", "|");
echo "<br>";
echo str_repeat("Elzero ", 3);
echo "<br>";
echo "=========================================================<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>