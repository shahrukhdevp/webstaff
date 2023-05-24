
<?php
$conn=new mysqli("localhost","root","","blog");
if(!$conn)
{
  die;
}
// $sql=//"Select email from users where email='{$email}' && password='{$password}'";
$email="rithvik@gmail.com";
$password="12";

$sql="Select email from users where email='rithvik@gmail.com' && password='1'".<script> alert('h');</script>.
$res=$conn->quer($sql);
if($res->num_rows>0)
{
die('yess');
}

else{
die('noohh');
}

?>
