<?php

echo 10 * 20 + 15 % 3 + 190 + 10 - 400; // 0
echo "<br>";

// ==================================================
$a1 = "10";
$a1 = +"10";
echo $a1 . " ";
echo gettype($a1);
echo "<br>";

$a2 = (integer)"10";
echo $a2 . " ";
echo gettype($a2);
echo "<br>";

$a3 = "10";
echo $a3 . " ";
echo gettype(+$a3);
echo "<br>";

// ==================================================
$b = 10;
$c = 20;
var_dump($b <=> $c);

// ==================================================
$d = 10;
$e = 20;
$f = 15;
var_dump($d < $e); // True
var_dump($f > $d); // True
var_dump($d != $e); // True
var_dump($d < $e); // True
var_dump($d <> $f); // True
var_dump($d <= $f); // True
var_dump(gettype($d) === gettype($e)); // True
var_dump(gettype($d) == gettype($e)); // True
var_dump(gettype((float) $d) !== gettype($e)); // True

// ==================================================
$points = 10;
$points += 3;
echo $points; // 13
echo "<br>";
$points -= 5;
echo $points; // 8;
echo "<br>";

// ==================================================

$g = "Elzero";
$h = "Web";
$i = "School";

// Method One
$j1 = $g . " " . $h . " " . $i;

// Method Two
$j2 = "$g $h $i";

// Method Three
$j3 = "$g ";
$j3 .= "$h ";
$j3 .= "$i ";

// Method Four
$j4 = "{$g} {$h} {$i}";

echo $j1; // Elzero Web School
echo "<br>";
echo $j2; // Elzero Web School
echo "<br>";
echo $j3; // Elzero Web School
echo "<br>";
echo $j4; // Elzero Web School
echo "<br>";

// ==================================================
$k = 10;
$l = 20;

echo (($k + $l) * ($k + $l) + ($k * $k)) * $k; // 10000
echo "<br>";

// ==================================================
// Code 1
$m = @$n or die("Custom Error");

// Code 2
$f = @file("Not_A_File") or die("Custom Error");

// Code 3
@include("Not_A_File") or die("Custom Error");
echo "<br>";

?>