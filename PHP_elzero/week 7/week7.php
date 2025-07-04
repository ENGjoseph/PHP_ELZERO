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
/*
String Functions
- implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */
  $friends = ["Ahmed", "Osama", "Ali", "Salem"];

  echo implode(" ", $friends) . "<br>";
  echo implode(", ", $friends) . "<br>";
  echo implode("@@", $friends) . "<br>";
  echo implode($friends) . "<br>";
  
  $str = "Elzero Web School Is Cool";
  
  echo "<pre>";
  print_r(explode(" ", $str));
  echo "</pre>";
  
  echo "<pre>";
  print_r(explode("I", $str));
  echo "</pre>";
  
  echo "<pre>";
  print_r(explode(" ", $str, 3));
  echo "</pre>";
  
  echo "<pre>";
  print_r(explode(" ", $str, -2));
  echo "</pre>";

  echo str_shuffle("Elzero") . "<br>";
  echo strrev("Elzero") . "<br>";
  
  echo strlen("   Elzero  ") . "<br>";
  echo strlen(trim("   Elzero  ")) . "<br>";

  echo trim("#@@Elzero@@@###", "@") . "<br>";
  
  echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  echo ltrim("#@@Elzero@@@###", "#@") . "<br>";
  echo "=========================================================<br>";
  
  /*
    String functions
    - chunck split(String[Required], length[optional], End[optional])
    - strlen(String[Required])
    - str_split(Strint[Required], length[optional])
    - strip_tags(String[Required], Allowed[Optional])
    -nl2br(String[Required], XHTML[Optional])
  */
  echo chunk_split("Elzero web school", 3 , "@");
  echo "<br>";
  echo "<pre>";
  print_r(str_split("Elzero"));
  echo "</pre>";

  echo "<pre>";
  print_r(str_split("Elzero",2));
  echo "</pre>";

  echo "<br>";
  echo strip_tags("<h3> Hello <b> Elzero </b> </h3>");
  echo "<br>";
  
  echo strip_tags("<h3> Hello <b> Elzero </b> </h3>","<h3><b>");
  echo "<br>";

  echo nl2br("Elzero\nweb\nschool", false);
  echo "<br>";
  echo "=========================================================<br>";

  /*
    String functions
    - strpos(String[Required], value[Required], Start position[optional]) Case-sensitive
    - strrpos(String[Required], value[Required], Start position[optional]) Case-sensitive
    - stripos(String[Required], value[Required], Start position[optional]) Case-sensitive
    - strripos(String[Required], value[Required], Start position[optional]) Case-sensitive
    - substr_count(String[Required], value[Required], Start position[optional], length[optional]) Case-sensitive
  */
?>