<?php
//find less occurenece of a number from an array 

$array=[1,1,2,3,2,4,5,6,7,8,99,0,9,4];
sort($array);
$arrayItemCount=[];

for ($i=0; $i<count($array); $i++) { 
    if(!isset( $arrayItemCount[$array[$i]]))
        $arrayItemCount[$array[$i]]=1;
    else
    $arrayItemCount[$array[$i]]= $arrayItemCount[$array[$i]]+1;  
}

echo "<br>";
$index = array_search(min($arrayItemCount), $arrayItemCount);
echo $index;
echo "<pre>";
print_r($arrayItemCount);



$data=['x'=>'A','y'=>'B','z'=>'C'];
$outputArr=[];

// convert it to output like given below
// [0=>'x',1=>'A'],
// [0=>'y',1=>'B'],
// [0=>'z',1=>'C'],
foreach($data as $key=>$val){
    $outputArr[]=[0=>$key,1=>$val];
}


echo "<pre>";
print_r($outputArr);
echo "<br>";

$test="t1";
// $HELLO="Heyy how are you!";
$var="HELLO";
// $$var="HI";
echo $var. "   ".$$var;
echo "<br>";
// echo $HELLO. "   ".$$var;

//from given string generate array that output particular charr occurence count
$string="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint minima tenetur architecto, impedit provident delectus commodi porro culpa a quod at similique consequatur neque. Accusamus nam laborum quos nulla nemo.";
$stringArr=[];
for($i=0;$i<strlen($string);$i++){
    if(!isset($stringArr[$string[$i]])){
        $stringArr[$string[$i]]=1;
    }else{
        $stringArr[$string[$i]]=$stringArr[$string[$i]]+1;
    }
}

ksort($stringArr);
echo "<pre>";
print_r($stringArr); die;
?>