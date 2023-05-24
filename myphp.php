<?php
$x = true or false;
print_r(var_dump($x));

//
$y=10;
echo $y++ + 1;
echo "<br>";
echo $y;


echo "<br>";
echo "<br>";
$x = 5;
echo $x; //5
echo "<br />";
echo $x++ + $x++;  // 
echo "<br />";
echo $x; //11
echo "<br />";
echo $x---$x--;
echo "<br";
echo $x; //1
echo "<br>";

$a1=Array();
$new_array=Array();
$a1["name"]="test";
$a1["age="]=22;
$new_array=array_merge($new_array,$a1);
print_R($new_array);

echo "<br>";
echo "<br>";
$text = 'John ';
$text[10] = 'Doe';
echo strlen($text);
echo "<br>";
echo "<br>";
echo $text;

echo "<br>";
echo "<br>";
$a = "PHP";
$a = $a + 1;
echo $a;