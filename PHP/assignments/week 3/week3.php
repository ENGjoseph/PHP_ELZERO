<?php $Username = "Joseph george" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $Username ?></title>
  </head>
  <body>
    <h1><?php echo $Username ?></h1>
    <p>Here In <?php echo $Username ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $Username ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $Username ?></footer>
  </body>
</html>

<?php
// ==================================================
$name = "elzero";
$$name = "Web";
echo $$name;
echo "<br>";
echo $elzero;
echo "<br>";
echo "${$name}";
echo "<br>";
echo $name = $$name;
echo "<br>";
echo $$name = &$name;
echo "<br>";

// ==================================================
$a = 200;
$b = &$a;
$a = 100;
echo $b; // 100

// ==================================================
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER["WINDIR"];
echo "<br>";

// ==================================================
/*
  10 predefined words
  1) $_SERVER
  2) $_GET
  3) $_POST
  4) $_REQUEST
  5) private
  6) $_FILES
  7) $_ENV
  8) $_COOKIE
  9) $_SESSION
  10) public
*/

// ==================================================
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";

?>