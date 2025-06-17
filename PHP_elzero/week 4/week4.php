<?php
    /*
        Operators 
        - Used to perform operations on values

        1) Arithmetic Operators
        - Used to do arithmetical operations & conversions

        - $a [+] $b  => addition
        - $a [-] $b  => subtraction
        - $a [*] $b  => multiplication
        - $a [/] $b  => division
        - $a [%] $b  => modulus
        - $a [**] $b => exponentiation
        - +$a        => Identity
        - -$a        => Negation
    */
    echo 10 + 20; // 30
    echo "<br>";
    echo gettype(10 + 20); // integer
    echo "<br>";
    echo 9.5 + 20.5; // 30
    echo "<br>";
    echo gettype(9.5 + 20.5); // float
    echo "<br>";

    echo 10 - 20; // -10
    echo "<br>";
    echo gettype(10 - 20); // integer
    echo "<br>";
    echo 9.5 - 20.5; // -11
    echo "<br>";
    echo gettype(9.5 - 20.5); // float
    echo "<br>";
    
    echo 10 * 20; // 200
    echo "<br>";
    echo gettype(10 * 20); // integer
    echo "<br>";
    echo 9.5 * 20.5; // 194.75
    echo "<br>";
    echo gettype(9.5 * 20.5); // float
    echo "<br>";
    
    echo 20 / 10; // 2
    echo "<br>";
    echo gettype(20 / 10); // integer
    echo "<br>";
    echo 20 / 8; // 2.5
    echo "<br>";
    echo gettype(20 / 8); // double
    echo "<br>";

    echo 20 % 10; // 0
    echo "<br>";
    echo 21 % 10; // 1
    echo "<br>";

    echo 2 ** 4; // 16
    echo "<br>";
    echo 3 ** 5; //243
    echo "<br>";
    
    echo "100"; //100
    echo "<br>";
    echo gettype("100"); // string
    echo "<br>";
    echo +"100"; //100
    echo "<br>";
    echo gettype(+"100"); // integer => to convert text to integer (must be numeric only)
    echo "<br>";
    echo "-100"; // -100
    echo "<br>";
    echo gettype("-100"); // string
    echo "<br>";
    echo -"-100"; // 100
    echo "<br>";
    echo gettype(-"-100"); // integer
    echo "<br>";
    
    //======================================================
    /*
        2) Assignment Operators
        - used to write value to another

        - $a [+=] $b => addition
        - $a [-=] $b => subtraction
        - $a [*=] $b => multiplication
        - $a [/=] $b => division
        - $a [%=] $b => modulus
        - $a [**=] $b => exponentiation
    */ 
    $a = 10;
    $a = $a + 20; // 30
    echo $a;
    echo "<br>";
    $a += 20; //50
    echo $a;

    echo "<br>";
    $b = 10;
    $b = $b - 20; // -10
    echo $b;
    echo "<br>";
    $b -= 20; // -30
    echo $b;
    echo "<br>";

    $c = 2;
    $c = $c ** 4; // 16
    echo $c;
    echo "<br>";
    $c **= 4;
    echo $c; // 65536
    echo "<br>";

    //======================================================
    /*
        3) comparison Operators
        - used to compare two values

        - ==    => equal
        - !=    => not equal
        - <>    => not equal
        - ===   => identical
        - !==   => not identical 
        - >     => larger than
        - >=    => larger than or equal
        - <     => smaller than
        - <=    => smaller than or equal
        - <=>   => spaceship [less than, equal or greater]

        search 
        - How does PHP compare strings with comparison Operators

    */ 
    var_dump(100 == 100); // true
    var_dump(100 == "100"); // true
    var_dump(100.0 == "100"); // true
    var_dump(100.0 != "100"); // false
    var_dump(100.0 <> "100"); // false

    var_dump(100.0 === "100"); // false
    var_dump(100 === 100); // true
    var_dump(100.0 === 100); // false

    var_dump(100.0 !== "100"); // true
    var_dump(100 !== 100); // false
    var_dump(100.0 !== 100); // true

    var_dump(100 > 100); // false
    var_dump(100 >= 100); //true

    var_dump(100 <=> 1005); // -1
    var_dump(1005 <=> 100); // 1
    var_dump(1005 <=> 1005); // 0

    //======================================================
    /*
        4) Increment and Decrement operators
        - increase and decrease values
    */
    $likes = 0;
    $likes ++;
    echo $likes;
    echo "<br>";
    $likes --;
    echo $likes;
    echo "<br>";

    $a = 0;
    echo $a++; // 0
    echo "<br>";
    echo $a; // 1
    echo "<br>";
    echo --$a; // 0
    echo "<br>";
    echo $a; // 0
    echo "<br>";

    //======================================================
    /*
        5) Logical operators
        - compare conditions

        - and => And => Two are true
        - &&  => And => Two are true ["&&" has a greater precedence than "and"]
        - or  => Or  => one or both is true
        - ||  => Or  => one or both is true ["||" has a greater precedence than "or"]
        - xor => Xor => one is true but not both
        - !   => Not => Not true
    */

    var_dump(100 > 50 && 100 > 80 && 100 > 90); // true
    var_dump(100 > 50 && 100 > 80 && 100 < 90); // false
    var_dump(100 > 50 || 100 > 80 || 100 < 90); // true
    var_dump(100 > 50 && 100 > 80 || 100 < 90); // true
    var_dump(100> 50 xor 100 > 110); // true

    //======================================================
    /*
        5) string operators
        - concatenate strings
    */

    $a = "joseph";
    $b = "george";
    $c = "samy";
    echo "$a $b $c";

    echo "<br>";
    echo "{$a} {$b} {$c}";
    echo "<br>";
    echo $a . " " . $b . " " .$c;
    echo "<br>";
    define("joseph","1");
    echo "{$a} {$b} {$c}". joseph;
    echo "<br>";
    $x = "joseph ";
    $x .= "george "; // josephgeorge
    $x .= "samy";
    echo $x;
    echo "<br>";

    //======================================================
    /*
        6) Array operators
        - Deal with arrays

        - +     => Union
        - ==    => Equal => same key and value
        - !=    => not equal
        - <>    => not equal
        - ===   => identical => same key and value, same order, same type
        - !==   => not identical
    */

    $arr1 = [1 => "A", 2 => "B"];
    $arr2 = [3 => "C", 4 => "D"];
    echo "<pre>";
    print_r($arr1 + $arr2);
    echo "</pre>";
    echo "<br>";

    $arr4 = [1 => "10", 2 => "20"];
    $arr5 = [2 => 20, 1 => 10];
    var_dump($arr4 == $arr5); // true
    var_dump($arr2 == $arr5); // false
    var_dump($arr4 != $arr5); // false

    $arr6 = [1 => "100", 2 => "200"];
    $arr7 = [2 => 200, 1 => 100];
    var_dump($arr6 === $arr7); // false
    
    //======================================================
    /*
        7) Error control operators
        - Control the Errors

        - @
        - Variable
        - File
        - Include
    */

    // variable
    // $bcd = @$abc or die("Variable not found");
    // echo $bcd;
    // echo "test $bcd";
    // echo "<br>";

    // file
    // $f = @file("week4_2.txt") or die("file not found");
    // echo "<pre>";
    // print_r($f);
    // echo "</pre>";
    // echo "<br>";

    //include
    // (@include("week4_3.pp")) or die("include file not found");

    //======================================================
    /*
        8) operator precedence
        - "||" has a greater precedence than "or"
        - "&&" has a greater precedence than "and"
    */

    echo 2 + 4 * 5; // 22
    echo "<br>";
    echo (2 + 4) * 5; // 30
    echo "<br>";
    echo 100 || false || 0; // 1 (true)
    echo "<br>";
    var_dump(100 || false || 0 || [] || ""); // true
    echo "<br>";

    $a = 10 || false;
    echo $a; // 1
    echo "<br>";

    $b = 10 or false;
    echo $b; // 10
    echo "<br>";
?>