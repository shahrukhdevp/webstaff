<?php

print_r(exec("php -1 firstphp.php"));
$str="rahul,rahul,ajay,vishal";
$arr=explode(",",$str);
$arr=array_unique($arr);
$arr=implode(",",$arr);
print_r($arr);
$b=[10,10,20,30];
$b=array_unique($b);
print_r($b);
 ?>
