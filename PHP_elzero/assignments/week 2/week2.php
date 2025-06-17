<?php
// echo 15.2 + 14.7 + (10.5 + 10.5); // 50
echo (integer)(15.2 + 14.7 + (10.5 + 10.5));

echo "<br>";
// echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
echo gettype((integer)(15.2 + 14.7 + (10.5 + 10.5)));
echo "<br>";

// ==================================================
echo "==================================================";
echo "<br>";
echo gettype(100);
echo "<br>";

$x = 100;
var_dump($x);

// ==================================================
echo "==================================================";
echo "<br>";
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo "<br>";

// ==================================================
echo "==================================================";
echo "<br>";
echo nl2br("We Love \n Elzero \n Web \n School");
echo "<br>";

// ==================================================
echo "==================================================";
echo "<br>";
echo nl2br("Hello \"'Elzero'\"
We Love \$Programming\$
Languages Specially \"PHP\"");
echo "<br>";

// ==================================================
echo "==================================================";
echo "<br>";
$something = "Programming";
echo <<< Code
Hello \PHP\
We Love $something
Code;
echo "<br>";

// ==================================================
echo "==================================================";
echo "<br>";
echo (int)"1Hello PHP";
echo '<br>';
echo gettype((int)"1Hello PHP");
echo "<br>";

// ==================================================
echo "==================================================";
echo "<br>";
echo "<pre>";
print_r([
    "FrontEnd" => [
        "HTML",
         "CSS",
        "JS" => ["VueJs" => [
          2 => "v2",
          3 => "v3"  
        ],
        0 => "ReactJs",
        1 => "Svelte"
        ]
    ],
    "BackEnd" => [
        "PHP",
        "MySQL",
        "Security"
    ],
    "GIT",
    "GITHUB",
    "Testing" => [
        "Unit testing",
        "End to End",
        "Integration"
    ]
]);
echo "</pre>"

?>