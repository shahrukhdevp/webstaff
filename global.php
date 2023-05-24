<?php
$arr['d']=1;
$id=8;
function test(){
//print_r($GLOBALS["arr"]['d']);
}
test();
class A{
    public $id;
    public function test(){
        echo "HELLO";
        echo $GLOBALS["arr"]['d'];
    }
}

$obj=new A();
$obj->test();
?>