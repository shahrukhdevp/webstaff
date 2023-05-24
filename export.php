 <?php
require_once('vendor/autoload.php');
use Shuchkin\SimpleXLS; 
$data=[];
if(isset($_FILES['export'])){
    $filename=$_FILES['export']['tmp_name'];
    $xls = SimpleXLS::parse( $filename);
if ($xls) {
    $data[]=$xls->rows();
    //print_r($xls->rows());
} else {
    echo SimpleXLS::parseError();
}
echo "<pre>";
// echo "org"."<br>";
// print_r($data);
// echo "<br>";
// foreach($data as $key=>$val){
//     // print_r($val);
//     // goto next;
//     // next:
//     foreach($val as $k=>$v){
//         print_r($v);
//     //    print_r($v); die;
//     // echo 'key:'.$k."<br>";
//     // echo 'val:'.$v."<br>";
//     foreach($v as $ky=>$vv){
//             echo $vv;
//     }
//     }
// }

print_r($data);
}
$DB=new mysqli("localhost","root","","learn_mysql");
$sql="SELECT *FROM city";
$DBResp=$DB->query($sql);
echo "<pre>";
$results=$DBResp->fetch_all(MYSQLI_ASSOC);
 //print_r($results);
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
    <form action="" method="POST" id="myform" enctype="multipart/form-data">
        <input type="file" name="export">
        <button type="submit">Submit</button>
    </form>
<table>
<tr>
<?php 
$data="";
foreach($results as $key=>$val){
    $data.="<tr>";
    // $data2="<tr>";
    foreach($val as $k=>$v){
        if($key==0){?>
        <th><?php echo $k;?> </th>
        <?php }?>
        <?php $data.="<td  >".$v."</td>";

}
$data.="<td >"."<button data-id=".$val['id']." onclick='pdf();'>pdf</button>"."</td>";
$data."</tr>";
// $data2="</tr>";
}
// echo $data.$data2;
// unset($data);
// unset($data2);
?>
<th>Actions</th>
<tr>
<?php echo $data;?>
</table>   
</body> 
<script>
function pdf(){
    alert('dggd')
}    
// console.log(window.history)
// if ( window.history.replaceState ) {
//       window.history.replaceState( null, null, window.location.href );
//   }
</script>
</html>
