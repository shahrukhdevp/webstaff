<?php
if(isset($_POST['btn'])){
    if(isset($_FILES['myfile']) && $_FILES['myfile']['error']==0){
       $location="http://localhost/php_lessions/img/";
       $name="img".time()."."."png";
       move_uploaded_file($_FILES['myfile']['tmp_name'],$location.$name); 
    }
}
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
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return test();">
        <label for="">Select File</label><br>
        <input type="file" name="myfile" id="myfile"><br>
        <button type="submit" name="btn">Upload</button>
    </form>

</body>
<script>
    function test(){
        // alert("yesy")
        // return false;   
    }
</script>
</html>