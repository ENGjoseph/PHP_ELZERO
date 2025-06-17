<?php
/*
    Variables
    - Naming Rules + Info
    [1] Start with Dollar sign $
    [2] Start with a Letter [a-z] or [A-Z] or Underscore
    [3] You can Use Numbers inside the Name
    [4] No special Characters Allowed
    [5] Case Sensitive
    - Test single and Double Quotes

    Search
    - Loosely Typed Language
    PHP automatically associates a data type to the variable,
    depending on its value. Since the data types are not set in a strict sense, 
    you can do things like adding a string to an integer without causing an error.
*/

    //1) ======================================================
    $Username = "Joseph"; 
    $username = "George"; 
    echo $Username;
    echo "<br>";
    echo 'Hello $username';
    echo "<br>";
    echo "Hello $Username";
    echo "<br>";

    //2) ======================================================
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page <?php $Username?></title>
</head>
<body>
    <div>Welcome <?php $Username?></div>
    <div><?php $Username?> You scored 1000 points </div>
    <div>
        <?php include("week3_2.php") ?>
    </div>
</body>
</html>

<?php 
    //3) ======================================================
    /*
        Variable Variable
        Takes the value of a variable and treats that as the name of a variable
    */

    $a = "Joseph";
    $$a = "george";
    $$$a = "samy";
    echo $a;
    echo "<br>";
    echo $$a;
    echo "<br>";
    echo $Joseph;
    echo "<br>";
    echo $$$a;
    echo "<br>";
    echo $george;
    echo "<br>";
    echo "Hello ${$a}"; //$$a
    echo "<br>";
    echo "Hello ${$$a}"; //$$$a
    echo "<br>";

    //4) ======================================================

    /*
        Assign Variable by reference
        - By default, variables are always assigned by value
        - Assigned by reference make variable alias or point to another

        Search
        - References are not pointers
    */
    $a = "joseph";
    $b = $a;
    $b = "elzero";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    
    $a = "joseph";
    $b = &$a;
    $b = "elzero";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    $a = "george";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    //5) ======================================================

    /*
        Pre-Defined Variables

        Search 
        -PHP Pre-Defined Variable
        Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

        The PHP superglobal variables are:

            1. $GLOBALS
            What it does: Holds all global variables.
            Use: Access global variables from anywhere in the script, even inside functions.
            Example:
            $x = 5;
            function test() {
            echo $GLOBALS['x']; // prints 5
            }

            2. $_SERVER
            What it does: Holds information about the server and the current request.
            Use: Get details like the script name, server name, browser info, etc.
            Example:
            echo $_SERVER['PHP_SELF']; // prints current script name

            3. $_REQUEST
            What it does: Collects data from forms (sent with either GET or POST) and cookies.
            Use: Get form data regardless of method (GET or POST).
            Example:
            echo $_REQUEST['username'];

            4. $_POST
            What it does: Stores form data sent using the POST method.
            Use: Get sensitive form data (e.g., passwords, login forms).
            Example:
            echo $_POST['email'];

            5. $_GET
            What it does: Stores data sent in the URL (after the ?).
            Use: Get query string data.
            Example:
            // URL: example.com/page.php?name=Joseph
            echo $_GET['name']; // prints Joseph

            6. $_FILES
            What it does: Handles file uploads.
            Use: Access info about uploaded files (name, type, size, etc.).
            Example:
            echo $_FILES['myfile']['name']; // shows uploaded file name

            7. $_ENV
            What it does: Contains environment variables (like server settings).
            Use: Rarely used directly; can get values like database credentials set in .env.
            Example:
            echo $_ENV['PATH'];

            8. $_COOKIE
            What it does: Stores values sent by the browser from cookies.
            Use: Track users or save settings.
            Example:
            echo $_COOKIE['user'];

            9. $_SESSION
            What it does: Stores data across multiple pages for the same user.
            Use: Save login status, user preferences, etc.
            Example:
            session_start();
            $_SESSION['username'] = 'Joseph';
            echo $_SESSION['username'];
    */
    echo '<pre>';
    print_r($_SERVER);
    echo $_SERVER["HTTP_CONNECTION"];
    echo '</pre>';
    // echo $_POST["username"];
    echo $_GET["username"];

?>

<!-- <form action="" method = "get"> -->
<form action="" method = "post">
    <input type="text" name = "username">
    <input type="submit" value = "send">
</form>

<?php 
    //6) ======================================================
    /*
        Constants
        - that value cannot change during the execution
        - Constants Always Uppercase
    */

    define("DB_NAME", "joseph");
    define("MAIN_NUMBER", 5);
    // define("MAIN_NUMBER", 10); // cant be redefined
    echo DB_NAME;
    echo "<br>";
    echo MAIN_NUMBER * 50;

    //7) ======================================================
    /*
        Pre-Defined Constants [Case Sensitive]
        - PHP_VERSION
        - PHP_OS_FAMILY
        - PHP_INT_MAX
        - DEFAULT_INCLUDE_PATH

        Magic Constants [Case Insensitive]
        - __LINE__
        - __FILE__
        - __DIR__

        Reserved Keywords
        - break
        - clone

        Search 
        - PHP Predefined Constants
        - Compile Time vs Runtime
        - List of reserved words
    */

    define("Clones", "AA");
    echo php_uname();
    echo "<br>";
    echo PHP_VERSION;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __dir__;
    echo "<br>";
    echo Clones; // don't delete the s
    echo "<br>";
?>