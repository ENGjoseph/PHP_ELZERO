<?php
function greeting($name, $gender = "")
{
    if($gender == "Male")
    {
        return "Hello Mr $name" . "<br>";
    }
    elseif($gender == "Female")
    {
        return "Hello Miss $name . <br>";
    }
    else
    {
        return "Hello $name . <br>";
    }

}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo "================================================== <br>";

// ==================================================
function get_arguments(...$words)
{
    foreach ($words as $word)
    {
        echo "$word ";
    }
    echo "<br>";
}
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo "================================================== <br>";

// ==================================================
function sum_all(...$nums)
{
    $sum = 0;
    foreach($nums as $num)
    {
        if($num <> 5)
        {
            if($num == 10)
            {
                $sum += 20;
            }
            else
            {
                $sum += $num;
            }
        }
    }
    return $sum . "<br>";
}
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
echo "================================================== <br>";

// ==================================================
function multiply(...$nums)
{
    $answer = 1;
    foreach($nums as $num)
    {
        if(!is_string($num))
        {
            $answer *= (int)$num;
        }
    }
    return $answer . "<br>";
}
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo "================================================== <br>";

// ==================================================
function check_status($a, $b, $c) {
    $word = "Hello ";
    if(is_string($a))
    {
        $word = $word . $a;
        if(is_numeric($b))
        {
            $word = $word . ", Your age is $b you are ";
            if($c == "false")
            {
                $word = $word . "not";
            }
        }
        elseif(is_numeric($c))
        {
            $word = $word . ", Your age is $c you are ";
            if($b == "false")
            {
                $word = $word . "not";
            }
        }
    }
    elseif(is_string($b))
    {
        $word = $word . $b;
        if(is_numeric($a))
        {
            $word = $word . ", Your age is $a you are ";
            if($c == "false")
            {
                $word = $word . "not";
            }
        }
        elseif(is_numeric($c))
        {
            $word = $word . ", Your age is $c you are ";
            if($b == "false")
            {
                $word = $word . "not";
            }
        }
    }
    else
    {
        $word = $word . $c;
        if(is_numeric($a))
        {
            $word = $word . ", Your age is $a you are ";
            if($c == "false")
            {
                $word = $word . "not";
            } 
        }
        elseif(is_numeric($b))
        {
            $word = $word . ", Your age is $b you are ";
            if($a == "false")
            {
                $word = $word . "not";
            }
        }
    }
    return $word . "available for hire <br>";
}

echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

echo "================================================== <br>";
//another easy answer
function check_status2($a, $b, $c) 
{
    $name = "";
    $age = "";
    $availability = "";
    $params = [$a, $b, $c];
    foreach($params as $param)
    {
        if(is_bool($param))
        {
            if($param == false)
            {
                $availability = "not";
            }
        }
        elseif(is_numeric($param))
        {
            $age = $param;
        }
        else
        {
            $name = $param;
        }
    }
    return "Hello $name, Your Age Is $age, You Are $availability Available For Hire <br>";
}
echo check_status2("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status2(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status2(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status2(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "================================================== <br>";

// ==================================================
function calculate($num1,$num2, $method = "a")
{
    if($method == "a" || $method == "add")
    {
        return $num1 + $num2 . "<br>";
    }
    elseif($method == "s" || $method == "subtract")
    {
        return $num1 - $num2 . "<br>";
    }
    else
    {
        return $num1 * $num2 . "<br>"; 
    }
}
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
echo "================================================== <br>";

// ==================================================
function calculate2(int $num_one, int $num_two) {
  return (double)$num_one + $num_two;
}

echo calculate2(20, 10); // 30
echo "<br>";
echo gettype(calculate2(20, 10)); // Double
echo "<br>";
echo "================================================== <br>";

// ==================================================
$message = "Hello";
function Hello($name)
{
    return "hello $name <br>";
}
$Hello = $message;
echo $Hello("Osama"); // Hello Osama
echo "================================================== <br>";

// ==================================================
$greet = fn($name) => "Greetings";
echo $greet("Osama"); // Greetings
?>