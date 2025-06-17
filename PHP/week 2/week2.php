<!-- data types /  -->
<?php
    /*
        ==========================================
        1) = Data types
        -------------

        = bool => boolean
        = int => integer
        = float => floating point number / double
        = string
        = array 
        = Other types
        = gettype()
        
        ==========================================
        
        2) = type Juggling + automatic type conversion

        ==========================================
        
        3) = search for settype

        ==========================================
        
        4) = Boolean + converting to boolean

        ==========================================
        
        5,6) = string and escaping

        ==========================================

        7) = Array
        ----------

        = Array with key
        = Array without key
        = Array with one key
        = Array with override
        ------------------------------------------

        = print_r()

        ==========================================

        8) = objects
        ------------
        In PHP, Object is a compound data type (along with arrays).
        Values of more than one types can be stored together in a single variable.
        Object is an instance of either a built-in or user defined class. In addition to properties,
        class defines functionality associated with data.

        ==========================================

        9) = unset
        ----------
        In PHP, the unset() function is used to destroy a variable,
        array element, or object. Once a variable or array element is "unset",
        it is completely removed from memory, and it no longer exists in the program.
        This function is essential for freeing up memory by removing unwanted 
        or unnecessary data during the execution of a script.

    */
    
    // 1) ======================================================
    echo gettype(true); // boolean
    echo '<br>';

    echo gettype(100); // integer
    echo '<br>';

    echo gettype(100.5); // integer
    echo '<br>';

    echo gettype("abc"); // integer
    echo '<br>';

    echo gettype(array("EG" => "Egypt" , "KSA" => "saudi arabia")); // integer
    echo '<br>';

    echo gettype(array("Egypt" , "KSA")); // integer
    echo '<br>';
    
    // 2) ======================================================
    echo 1 + "2"; // 3
    echo "<br>";

    echo gettype(1 + "2"); // integer
    echo "<br>";

    echo gettype(true + true); //integer;
    echo "<br>";

    // echo 5 + "5 lessons"; will give me error but it will give you 10

    // echo gettype(5 + "5 lessons"); // integer but it will give us warning

    echo 10 + 10.5; // 25.5
    echo "<br>";

    echo gettype(10 + 10.5); // double / float
    echo "<br>";

    // 3) ======================================================
    echo 5 + (int) "5 lessons"; // 10
    echo "<br>";

    echo gettype(5 + (integer) "5 lessons"); // integer 
    echo "<br>";

    echo gettype(5 + (integer) 15.5); // integer
    echo "<br>";

    echo (integer) 5.5 + (integer) 5.5; // 10
    echo "<br>";

    echo gettype(5.5 + 5.5); // double
    echo "<br>";

    echo gettype((integer) 5.5 + (integer) 5.5); // integer
    echo "<br>";

    echo (integer)(5.5 + 5.5); // 11
    echo "<br>";

    // 4) ======================================================

    var_dump((bool)""); // boolean false
    echo "<br>";

    var_dump((bool) array()); // boolean false
    echo "<br>";

    var_dump((bool)[]); // boolean false
    echo "<br>";

    var_dump((bool) []); // boolean false
    echo "<br>";

    var_dump((bool)"0"); // boolean false
    echo "<br>";

    var_dump((bool) 0); // boolean false
    echo "<br>";

    var_dump((bool) array(1)); // boolean true
    echo "<br>";

    var_dump((bool) [1]); // boolean true
    echo "<br>";

    var_dump((bool) 100); // boolean true
    echo "<br>";
    
    // 5) ======================================================

    echo "Hello PHP"; // Hello PHP
    echo "<br>";

    echo 'Hello PHP'; // Hello PHP
    echo "<br>";

    echo "Hello ' PHP"; // Hello PHP
    echo "<br>";

    echo 'Hello "PHP"'; // Hello "PHP"
    echo "<br>";

    echo 'Hello \'PHP\''; // Hello 'PHP'
    echo "<br>";

    echo "Hello \"PHP\""; // Hello "PHP"
    echo "<br>";

    echo "Hello PHP \\"; // Hello PHP \
    echo "<br>";

    echo 'Hello PHP 
    On Multiple
    Lines';
    echo "<br>";

    echo nl2br('Hello PHP 
    On Multiple
    Lines');
    echo "<br>";

    // 6) ======================================================

    // Heredoc 
    $name = "Osama";
    echo <<<"Here"
    Hello PHP
    Special characters $$$ ' ' ' """ \\\
    Hello My name is $name
    Here; // Hello PHP Special characters $$$ ' ' ' """ \\ Hello My name is Osama
    echo "<br>";

    //Nowdoc (escape only)
    echo <<<'Now'
    Hello PHP
    Special characters $$$ ' ' ' """ \\\
    Hello My name is $name
    Now; // Hello PHP Special characters $$$ ' ' ' """ \\\ Hello My name is $name
    echo "<br>";

    echo "<ul>";
        echo "<li>" . $name . "</li>";
        echo "<li>" . $name . "</li>";
        echo "<li>" . $name . "</li>";
        echo "<li>" . $name . "</li>";
    echo "</ul>";
    echo "<br>";
    
    echo <<<"Navlinks"
    <ul>
        <li> $name </li>
        <li> $name </li>
        <li> $name </li>
        <li> $name </li>
    </ul>
    echo "<br>";
    Navlinks;
    echo "<br>";

    // 7) ======================================================

    echo "<pre>";
    print_r([
        "A" => "Ahmed",
        "B" => "basem",
        "Mahmod",
        True => "Sayed", 
        "1" => "Osama", // override the above
        9 => "Amira",
        "Eman",// continue numbering from the last number
        "boles", // continue numbering from the last number
        False => "Asmaa", // override the 0 index
        8 => "Haytham",
        "Joseph", // will continue from the last indexed number  => 12
        "Names" => [
            "Osama",
            "Ahmed",
            "Sayed" => [
                "1",
                "2",
                "3"
                ]
            ]
    ]);
    echo "</pre>";
    echo "<br>";

    // 8) ======================================================
    class SayHello{
    function hello(){
        echo "Hello World";
    }
    }
    $obj=new SayHello;
    $obj->hello();
    echo "<br>";
    
    $obj=new stdClass;
    $obj->name="Deepak";
    $obj->age=21;
    $obj->marks=75;
    print_r($obj);
    echo "<br>";

    $arr=array("name"=>"Deepak", "age"=>21, "marks"=>75);
    $obj=(object)$arr;
    print_r($obj);
    echo "<br>";

    $name="Deepak";
    $age=21;
    $percent=75.50;
    $obj1=(object)$name;
    print_r($obj1);
    $obj2=(object)$age;
    print_r($obj2);
    $obj3=(object)$percent;
    print_r($obj3);
    echo "<br>";

    // 9) ======================================================
    $name = "Anjali";
    echo $name . "\n";  
    unset($name);
    // echo $name; it will give you error if its not commented because unset is used to delete the data from the memory
?>