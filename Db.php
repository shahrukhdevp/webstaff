<?php
$conn=new mysqli("localhost","root","","t1");
if($conn->connect_error){
    echo "<h1 style='color:red;'>Database Connection failed!</h1>";
    $conn=null;
}

?>