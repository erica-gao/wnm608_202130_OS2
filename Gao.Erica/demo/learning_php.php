<?php

// phpinfo();
// broken

echo "<h1>Hello World</h1>";
// print text to document; process html



// assigning variables with $
$a = 5;


// String Interpolation
// "" interprets variables
// '' prints
echo "<div>I have $a things</div>\n";
echo '<div>I have $a things</div>';
echo '<div>I have $a "things"</div>';



// runs top to bottom: b=10
// Value types
// Integer
$b = 15;

// Float
$b = 0.57;


$b = 10;





// Strings
$name = "Yerdude";
$name = "Hamilton";


// Boolean
$isOn = true;

// function, class, object



// Math


// Order of Operation
// PEMDAS

echo 5 + 2 - 3;


// Concatenation
// . means + here
echo "<div>b + a = c</div>";
echo "<div>$b + $a = " . ($b+$a) . "</div>";


?>


<hr>
<div>This is my name</div>
<div><?php  

$firstname = "Erica";
$lastname = "Gao";
$fullname = "$firstname $lastname";

echo $fullname;

?>. What's yours?
</div>

<hr>


<!-- You can write html with php -->


<?php

// Superglobal
// website will be broken if url doesn't have ?name=Hamilton; click one of the name links to make it work
echo "Name is: ".$_GET['name'];
echo "<div><a href='?name=Bob'>Bob</a></div>";
echo "<div><a href='?name=Grace'>Grace</a></div>";

// use {} around complex variables

echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=textarea'>Textarea</a></div>";
echo "Name is: <{$_GET['type']}>{$_GET['name']}</{$_GET['type']}>";

?>

<hr>

<?php

// Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"];

echo $colors[2];

echo "
   <br>$colors[0]
   <br>$colors[1]
   <br>$colors[2]
";

echo count($colors);

?>
<!-- quick echo: for printing values-->
<div style="color:<?= $colors[1] ?>">
   This text is green
</div>


<hr>

<?php 

// Associative Array
$colorsAssoc = [
   "red" => "#f00",
   "green" => "#0f0",
   "blue" => "#00f"
];

echo $colorsAssoc['red'];

?>


<hr>

<?php

// Casting
$c = "$a";
$d = $c*1;

// casting colorsAssoc as Object
$colorsObject = (object)$colorsAssoc;

// echo $colorsObject;


echo "<hr>";

// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssoc['red']."<br>";
echo $colorsAssoc[$colors[0]]."<br>";

// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php

// users don't have to see this; for debugging use: 
var_dump($colors);
echo "<hr>";
var_dump($colorsAssoc);


// pre formatted element: all original html white space formatting is acknowledged 
echo "<pre>",var_dump($colorsObject),"</pre>";


// CUSTOM FUNCTIONS
function pretty_dump($data) {
   echo "<pre>",var_dump($data),"</pre>";
}

pretty_dump($colors);

?>
