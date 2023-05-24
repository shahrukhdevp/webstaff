<?php
$conn=new mysqli("localhost","root","","learn_mysql");
//
// if(isset($_POST['user-action'])){
//   $updateQuery="Update `trailer` set ";
//   $postData=$_POST;
//   if(isset($postData['action'])){
//     unset($postData['action']);
//   }
//   if(isset($postData['user-action'])){
//     unset($postData['user-action']);
//   }
//   if(isset($postData['lname'])){
//     unset($postData['user-action']);
//   }
//
//     $count=0;
//     foreach ($postData as $key => $value) {
//       $count++;
//         $updateQuery.=$key.'='.$value;
//         if($count<sizeOf($postData)){
//           $updateQuery.=',';
//         }
//
//     }
// }
// echo $updateQuery;
$res=$conn->query("describe student ");
$Fielddatatye=mysqli_fetch_all($res);
echo "<pre>";

foreach($Fielddatatye as $k=>$v)
{
echo $v[0];
}
die;
function getDataTyep($fieldname){
  $dbfields=[];
  $intfields=[];
  $charfield=[];
  $typearray=[];
    $field_type=[];
  foreach ($GLOBALS['Fielddatatye'] as $key => $value) {
  $dbfields[]=$value[0];
  $type=explode('(',$value[1]);

  $field_type[$value[0]]=  $type[0];
  // if($typearray[0]=='int');
}
  $dbfields['type']=  $field_type;
// foreach ($GLOBALS['Fielddatatye'] as $key => $value) {
// $dbfields[]=$value[0];
// $fieldtype=explode('(',$value[1]);
// $typearray[]=$fieldtype[0];
// // if($typearray[0]=='int');
// }

// $fieldtype=$_GLOBAL['Fielddatatye'];
echo "<pre>";
print_r($dbfields);
}
getDataTyep('');
if($conn){
$fieldarayy=['name','city','rollno'];
// $sql="select city from student Limit 1";
//
// echo "<pre>";
// print_r(mysqli_fetch_all($res));
// while($row=$res->fetch_field()){
//   print_r($row);
// }
}
 ?>
