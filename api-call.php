<?php
$v=NULL;
echo $v; die("nddb");
if(isset($_POST['submit'])){
$data=Array();
$data['fname']="Rahul";
$data['age']="23";
$data=json_encode($data);
// echo "<pre>";
// print_r(gettype($_POST));
// echo "<br>";
// print_r(gettype($data));

 $url= "http://localhost/php_lessions/getRequest.php";
    
    $ch=curl_init($url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_HEADER, true);


    curl_setopt($ch, CURLOPT_HTTPHEADER,
        array(
            'Content-Type:application/json',
        ));
    $result = curl_exec($ch);
    print_r($result);
    curl_close($ch);

// result sent by the remote server is in $result
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" id="fname" name="fname">
    <input type="text" id="age" name="age">
    <button type="submit" name="submit">Submit</button>
</form>