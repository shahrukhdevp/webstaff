<?php
$conn=new mysqli("localhost","root","","learn_mysql");
if(!$conn){
    die("Connection failed");
}
$sql="select *from informer where id=4 and mobileno IN(6354323062,6354323063)";
$resp=$conn->query($sql);
// print_r(($resp)); die;
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" id="myform" >
        <label for="">FirstName</label><br>
        <input type="text" name="name" value="test" ><br>
        <input type="password" name="p" value="testt2" readonly>
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
       </ul>
        <button type="submit">Submit</button>
    </form>
    <div id="contents">

    </div>
</body> 

<script>
    alert("hdhh")
   function hello(){
   let a=10;
    console.log("hello")
    function hi(){
        a++;    
        console.log(a);
        console.log("hi")
    }
    hi()
}
hello();
// console.log(window.history)
// if ( window.history.replaceState ) {
//       window.history.replaceState( null, null, window.location.href );
//   }
</script>
</html>
