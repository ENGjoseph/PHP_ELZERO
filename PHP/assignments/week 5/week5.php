<?php
$a = 100;
$b = 200;
$c = 100;
if ($b > $a && $a === $c && ($a + $c) === $b)
{
    echo "yes";
}
else
{
    echo "no";
}
echo "<br>";
echo "================================================== <br>";

// ==================================================
// Test Case 1
// $a = 100;
// $b = 200;
// $c = 300;
// A Is Not Larger Than B Or C

// Test Case 2
// $a = 200;
// $b = 100;
// $c = 300;
// A Is Larger Than B

// Test Case 3
$a = 200;
$b = 200;
$c = 100;
// A Is Larger Than c
if ($a > $b)
{
    echo "A > B";
}
else if ($a > $c)
{
    echo "A > C";
}
elseif ($a < $b || $a < $c)
{
    echo "A is not larger than B or C";
}
echo "<br>";
echo "================================================== <br>";

// ==================================================
$admins = ["Osama", "Ahmed", "Sayed"];
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    echo "The Request Method Is Post and username is " . $_POST["user"];
    echo "<br>";
    if (in_array($_POST["user"], $admins))
    {
        echo "This Username " . $_POST["user"] . " Is Admin";
    }
    echo "<br>";
echo "================================================== <br>";

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
</body>
</html>

<?php
// ==================================================
$a = 30;
$b = 20;
$c = 10;
echo $a + $b === $c ? "A + B = C" : $a + $c === $b ? "A + C = B" : $b + $c === $a ? "B + C = A" : "The End";
echo "<br>";
echo "================================================== <br>";

// ==================================================
$name = "Osama";
$age = 40;
$country = "Egypt";


if ($age > 18 && gettype($name) === "string" && $country === "Egypt") 
echo "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>";
echo "================================================== <br>";

// ==================================================
$genre = "Hack And Slash";
switch ($genre)
{
    case ("RPG"):
        echo "I Recommend Ys Games";
        break;
    case ("Hack And Slash"):
        echo "I Recommend Castlevania Games";
        break;
    case ("FPS"):
        echo "I Recommend Uncharted Games";
        break;
    case ("Platform"):
    case ("Puzzle"):
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
}
echo "<br>";
echo "================================================== <br>";

// ==================================================
$num_one = 23;
$num_two = 5;
$op = "/";
switch($op)
{
    case ("+"):
        echo $num_one + $num_two;
        break;
    case ("-"):
        echo $num_one - $num_two;
        break;
    case ("*"):
        echo $num_one * $num_two;
        break;
    case ("/"):
        echo $num_one / $num_two;
        break;
    default:
        echo "unknown operation";
}
echo "<br>";
echo "================================================== <br>";

// ==================================================
$day = "Sat";
if($day == "Sat" || $day == "Sun" || $day == "Mon")
{
    echo "We Are Open All The Day";
}
elseif($day == "Tue" || $day == "Wed")
{
    echo "We Are Open From 08:12";
}
elseif ($day == "Thu" || $day == "Fri")
{
    echo "We Are Closed";
}
else
{
    echo "Unknown day";
}
echo "<br>";
echo "================================================== <br>";

// ==================================================
for($i = 10; $i > 0; $i--)
{
    echo "$i <br>";
}
echo "================================================== <br>";

// ==================================================
for ($i = 0; $i < 21; $i += 2) { 
    if ($i == 0)
    {
        continue;
    }
    echo "$i <br>";
}
echo "================================================== <br>";
$i = 0;
while($i < 20)
{
    $i += 2;
    echo "$i <br>";
}
echo "================================================== <br>";
$i = 0;
do
{
    $i += 2;
    echo "$i <br>";
}while($i < 20);
echo "================================================== <br>";

// ==================================================
$num = 2;
$i = 1;
while ($num < 520) {
    if($num == 2)
    {
        $num = 1;
    }
    echo $num. "<br>";
    $num += ($i * 3);
    $i *= 2;
}
echo "================================================== <br>";

// ==================================================
$start = 10;
$end = 0;
$stop = 3;
for ($i = $start; $i >= $stop; $i--)
{
    if($i <> $start)
    {
        echo $end;
    }
    echo "$i <br>";
}
echo "================================================== <br>";

// ==================================================
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($i = $start; $i < sizeof($mix); $i++)
{
    if($i == $start || is_string($mix[$i]))
    {
        continue;
    }
    else
    echo $mix[$i]."<br>"; 
}
echo "================================================== <br>";

// ==================================================
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $i => $m)
{
    echo "The Name Is $i And I Need $m Pound From Him <br>";
}
echo "================================================== <br>";

// ==================================================
$mix = [1, 2, "A", "B", "C", 3, 4];
$n = 0;
$l = 0;
for($i = 0; $i < sizeof($mix); $i++)
{
    if(is_integer($mix[$i]))
    {
        $n++;
        echo $mix[$i] . "<br>";
    }
    else
    {
        $l++;
    }
}
echo "$n Numbers Printed <br> $l Letters Ignored <br>";
echo "================================================== <br>";

// ==================================================
$nums = [1, 13, 12, 20, 51, 17, 30];
for($i = 0; $i < sizeof($nums); $i++)
{
    if($nums[$i] % 2 == 0)
    {
        echo $nums[$i] / 2 . "<br>";
    }
}
echo "================================================== <br>";

// ==================================================
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i = $help_num / 2; $i < $help_num; $i++)
{
    echo $names[$i] . "<br>";
}
echo "================================================== <br>";

// ==================================================
$help_num = 4;
$nums = [2, 4, 5, 6, 10];
$i = 0;
$sum = 0;
foreach($nums as $number)
{
    $sum = $nums[$i] + $nums[$help_num];
    echo "$nums[$i] + $nums[$help_num] = $sum . <br>";
    $i++;
    $help_num--;
}
?>