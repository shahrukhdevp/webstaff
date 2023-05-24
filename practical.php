<?php
//write a programme to check programme is primeno or not
echo (31/2);
echo "<br>";
echo (31%2);
echo "<br>";
function isPrimeNo($no=0){
    if($no==0){
        return false;
    }
    for($i=2;$i<=$no/2;$i++){
        if($no % $i==0){
            return false;
        }
        return true;
    }
}
$no=31;
if(isPrimeNo($no)==true){
    echo "IT IS AN PRIME NO!";
}else{
    echo "IT IS NOT PRIME NO!";
}

echo "<br>";
//write a programme to find occurence of a word in a string
$word= "interviewmocks.com is a interview prep site";
$string="interview";
echo substr_count($word,$string);

?>