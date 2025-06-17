<?php
/*
    Function
    - Introduction and Dry concept
    - Parameter
    - Argument
*/

function say_hello_to_someone($someone)
{
    echo "hello $someone <br>";
}
say_hello_to_someone("osama");
say_hello_to_someone("ahmed");
say_hello_to_someone("sayed");
echo "=============================================<br>";

/*
    Function
    - Advanced Examples with parameters and arguments
    - Real life example
*/
function say_hello_to($one, $two)
{
    echo "hello $one $two<br>";
}
say_hello_to("osama", "Ahmed");
function deep_freezer($item)
{
    if($item == "water")
    {
        echo "make it ice <br>";
    }
    elseif ($item == "cocacola")
    {
        echo "make it cold <br>";
    }
    elseif ($item == "fruits")
    {
        echo "make it fresh <br>";
    }
    else
    {
        echo "unknown item";
    }
}
deep_freezer("water");
deep_freezer("cocacola");
deep_freezer("fruits");
deep_freezer("wood");
echo "<br>";
echo "=============================================<br>";

/*
    Function
    - Optional return and null
    - End after return
*/

$prizes = ["PC", "Playstation", "XBOX", "Apple Tv", "Laptop","IPAD", "Iphone"];
function get_number($num1, $num2)
{
    return $num1 + $num2;
    echo "will not work";
}
$prize_number = get_number(2,1);
var_dump($prize_number);
echo $prizes[get_number(2,1)];
echo "<br>";
echo "=============================================<br>";

/*
    Function
    - Default parameter value
    --- Using
    --- test data
    --- skip arguments
*/

function get_data($country= "Private", $name= "Private", $age = "Private", $address = "Private address")
{
    $line_one = "your country is $country and your name is $name <br>";
    $line_two = "your age is $age and you live in $address";
    return $line_one . $line_two;
}
echo get_data("Egypt", "joseph", 21, "Cairo 5th floor");
echo "<br>";
echo "=============================================<br>";

/*
    Function
    - Variable arguments list
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()
*/
function calculate($num1, $num2, $num3)
{
    echo "number of arguments " . func_num_args() . "<br>";
    echo "arguments index number 3 is " . func_get_arg(1) . "<br>";
    print_r(func_get_args());
    $result = 0;
    foreach(func_get_args() as $arg):
        $result += $arg;
    endforeach;
    echo "<br>" . $result . "<br>";
}
calculate(10, 20, 50);

function calculator(...$nums)
{
    echo "arguments index number 3 is " . $nums[1] . "<br>";
    print_r($nums);
    $result = 0;
    foreach(func_get_args() as $arg):
        $result += $arg;
    endforeach;
    echo "<br>" . $result . "<br>";
}
calculator (10,20,30);
echo "=============================================<br>";

/*
    Function
    - Function advanced training
    -- Unpacking in arguments

    - PHP variadic functions
    - splat operator
*/
$group_of_skills = ["HTML", "CSS", "JS", "PHP"];
function get_name($name, $country ="private", ...$skills)
{
    echo "hello $name <br>";
    echo "your country is $country <br>";
    foreach ($skills as $skill)
    {
        echo "$skill <br>";
    }

}
// get_name("joseph", "Egypt", ...$group_of_skills);
get_name("joseph", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);
echo "=============================================<br>";

/*
    Function
    - variable function
    --- PHP allow to use variable like function
    --- when you append parentheses () to variable PHP will look for function with that name
    - Function Exists
    --- Function_exists("Func_name")
*/
function one()
{
    return "one from function";
}
echo one();
$func1 = "one";
echo $func1() . "<br>";

function say_hello_to_one($one)
{
    return "hello $one";
}
$func2 = "say_hello_to_one";
echo $func2("joseph") . "<br>";

function testing()
{
    echo "testing from function";
}
if (function_exists("testing"))
{
    echo testing();
}
else
{
    echo "function not found";
}
echo "<br>";

echo strlen("Joseph") . "<br>";
$func3 = "strlen";
echo $func3("joseph") . "<br>";
echo "=============================================<br>";

/*
    Function
    - passing arguments by reference
    --- by default, function arguments are passed by value
    --- if the value of the argument inside the function changed it will not change outside
    --- to change it outside pass the argument by reference

    - Return Type declaration

*/
function add_five(&$number)
{
    $number += 5;
    return $number;
}
$n = 15;
echo add_five($n) . "<br>";
echo $n . "<br>";

function calculates($n1, $n2) : int
{
    return $n1 + $n2;
}
echo calculates(10.5,9.5) . "<br>";
echo gettype(calculates(10.5,9.5)) . "<br>";
echo "=============================================<br>";

/*
    Function
    - Anonymous function
    --- when we create a function we give it a name so we can call it later with that name
    --- sometimes we need to create a function for specific task <= this is not against DRY

    - Variable inherit from parent scope
    - Variable inherit by reference from parent scope
    - Anonymous function can be passed to a function
    - Anonymous function can be return from a function
*/

$say_hello = function()
{
    return "hello";
};
echo $say_hello() . "<br>";

$say_hello = function($someone)
{
    return "hello $someone";
};
echo $say_hello("joseph") . "<br>";

$msg = "Hi"; // cant be written outside the anonymous function
$say_hi = function($someone)
{
    return "hi $someone";
};
echo $say_hi("joseph") . "<br>";

// pass anonymous function to function => array_map
$nums = [10,20,30,40,50];
function add_two($item)
{
    return $item + 2;
}
$nums_after_adding_five = array_map("add_two",$nums);
echo "<pre>";
print_r($nums_after_adding_five);
echo "</pre>";

$nums_after_adding_ten = array_map(function($item) {return $item + 10;},$nums);
echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";
echo "=============================================<br>";

/*
    Function
    - Arrow function
    --- short syntax for anonymous function
    --- automatic use variables from parent scope

    - syntax
    --- function replaces with fn
    --- no need for curly braces
    --- return is omitted
*/

$say_hello2 = fn() =>  "hello";
echo $say_hello2() . "<br>";
echo "=============================================<br>";
?>