<?php

if(isset($_POST['upload_btn']))
{
  if(isset($_FILES['myfile']) && $_FILES['myfile']['error']==0){

      $fp=fopen($_FILES['myfile']['tmp_name'],'r')
      or die('Failed to open file');
      $i=0;
        while(($data = fgetcsv($fp))!=FALSE){
              if($i==0) {
                 $i++;
                continue;
               }
                 echo "<pre>";
                 print_r($data);
        }
        fclose($fp);
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <heading>
    <h1>WELCOME</h1>
    </heading>
    <form class="" action="" method="post" enctype="multipart/form-data">
      <label for="">Upload File</label><br>
      <input type="file" name="myfile" accept=".csv"><br>
      <label for="">Only CSV file allowed</label><br>
      <button type="submit" name="upload_btn">Submit</button>
    </form>
  </body>
</html>
