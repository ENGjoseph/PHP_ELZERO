<?php
    /*
        control Structure
        - If, Elseif, else <= Basics

        Syntax
        If (condition)
        {
            if condition is true run me
        }
        elseif(condition)
        {
            if this condition is true and all the previous code blocks are false run me
        }
        else
        {
            if all previous code block are false run me  
        }
    */

    if(10 < 5)
    {
        echo "first yes";
    }
    elseif(10 == 10)
    {
        echo "second yes";
    }
    else
    {
        echo "no";
    }

    echo "<br>";
    $page = "home";
    if ($page == "about")
    {
        echo "this is the about page";
    }
    elseif($page == "home")
    {
        echo "this is the home page";
    }

    echo "<br>";
    $title = "home";
    if ($title == "")
    {
        echo "unknown page";
    }
    else
    {
        echo $title;
    }

    echo "<br>";
    $lang = "Arabic";
    if ($lang == "Arabic")
    {
        echo "مرحبا";
    }
    elseif ($lang == "english")
    {
        echo "hello";
    }
    elseif ($lang == "spanish")
    {
        echo "hola";
    }
    else
    {
        echo "unknown language";
    }
    echo "<br>";

    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        // echo $_POST['username'];
        // echo "<br>";
        // echo $_POST['lang'];

        if($_POST['lang'] == 'ar')
        {
            header("location: week5_2.php");
            exit();
        }
        if($_POST['lang'] == 'en')
        {
            header("location: week5_3.php");
            exit();
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>support</title>
</head>
<body>
    <form action="" method ="post">
        <input type="text" name = "username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">english</option>
            <option value="sp">spanish</option>
        </select>
        <input type="submit" value = "go">
    </form>
</body>
</html>

<?php 
    if (10>5)
    {
        echo "good";
    }
    else
    {
        echo "bad";
    }
    echo "<br>";

    if (10 > 5) echo "good";
    else echo "bad";
    echo "<br>";

    if (10 > 5) 
    :
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello page
</body>
</html>

<?php endif; 
    echo "<br>";
?>

<?php
    if (10 > 10):
        echo "First";
    elseif (10 > 5) :
        echo "Second";
    else :
        echo "last";
    endif;
    echo "<br>";
?>

<?php
    $name = "joseph";
    $is_student = true;
    $is_orphan = true;
    $country = "Egypt";
    $country_discount = 50;
    $price = 100;
    $student_discount = 10;
    $orphan_discount = 15;
    echo "hello $name";
    echo "<br>";
    if ($country == "Egypt")
    {
        if ($is_student == true)
        {
            
            echo "country discount $country_discount";
            echo "<br>";
            echo "student discount $student_discount";
            echo "<br>";
            if ($is_orphan == true)
            {
                echo "orphan discount $orphan_discount";

                echo "<br>";
                echo "the final price is " . ($price - $country_discount - $student_discount - $orphan_discount);
            }
            else
            {
                echo "the final price is " . ($price - $country_discount - $student_discount);
            }
        }
        else
        {
            echo "country discount $country_discount";
            echo "<br>";
            echo "the final price is " . $price - $country_discount;
        }
    }
    else
    {
        echo "no discount";
        echo "<br>";
        echo "the fina price is $price";
    }
        echo "<br>";
?>

<?php
    // ternary operator => short if
    $a = 10;
    echo $a > 8 ? "good" : "Bad";
    echo "<br>";

    echo "I love PHP because its A " . ($a > 8 ? "good" : "Bad") . " language";
    echo "<br>";

    $result = $a > 8 ? "good" : "Bad";
    echo "I love PHP because its A $result language";
    echo "<br>";

    // ======================================================
    // switch

    $day = "sat";
    switch ($day)
    {
        case "sat": 
            echo "hello today is $day we are open from 10 to 16";
            break;
        case "sun":
            echo "hello today is $day we are open from 12 to 18";
            break;
        case "mon":
        case "thu":
        echo "hello today is $day we are open from 08 to 12";
        break;
        default:
        echo "unknown Day";
    }
    echo "<br>";

    // ======================================================
    // loops
    // while loop
    $i = 1;
    while($i <= 3)
    {
        echo "$i <br>";
        $i++;
    }

    $a = 1;
    while($a <= 3):
        echo "$a <br>";
        $a++;
    endwhile;

    // do while
    $i = 4;
    do
    {
        echo "$i <br>";
        $i++;
    } while($i <= 3);

    // for loop
    for($i = 0; $i <= 5; $i++)
    {
        echo "$i <br>";
    }

    // for each
    $countries = ["EG", "SA", "QA", "SY"];
    echo "<pre>";
    print_r($countries);
    echo "</pre>";
    foreach ($countries as $country)
    {
        echo $country . "<br>";
    }

    $countries_with_discount = ["EG" => 50,"SA" => 30, "QA" => 50, "SY" => 70];
    echo "<pre>";
    print_r($countries_with_discount);
    echo "</pre>";
    foreach($countries_with_discount as $country => $discount)
    {
        echo "country name is $country and discount is $discount <br>"; 
    }

    //break and continue
    $countries = ["EG", "SA", "QA", "SY", "USA", "GER"];
    foreach ($countries as $country)
    {
        echo $country . "<br>";
        if ($country == "USA")
        {
            break;
        }
    }
    $countries = ["EG", "SA", "QA", "SY", "USA", "GER"];
    foreach ($countries as $country)
    {
        if ($country == "USA")
        {
            continue;
        }
        echo $country . "<br>";
    }

    // include (continue the code and gives you error)
    // and require (didn't continue the code but give you error)
    include ("week5_4.php");
    echo $a . "<br>";
    echo "Continue <br>";

    require ("week5_4.php");
    echo $a . "<br>";
    echo "Continue <br>";

    include_once ("week5_4.php");
    echo $a . "<br>";
    $a = 20;
    include_once ("week5_4.php");
    echo $a . "<br>";


    //goto
    $i = 1;
    if($i % 2 == 0)
    {
        goto even;
    }
    else
    {
        goto odd;
    }
    even: echo "this is even number";
    odd: echo "this is odd number";
    echo "<br>";

    $n = 1;
        label:
            echo $n . '<br>';
            $n++;
            if ($n <= 10)
                goto label;
?>