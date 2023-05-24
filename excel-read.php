<?php
require_once('vendor/autoload.php');
use PhpOffice\phpspreadsheet\src\PhpSpreadsheet\Spreadsheet;
use PhpOffice\phpspreadsheet\src\PhpSpreadsheet\Writer\Xlsx;
if(isset($_FILES['myfile']) && $_FILES['myfile']['error']==0){  
    $tmpname=$_FILES['myfile']['tmp_name'];
    echo $tmpname;    
    $Spreadsheet=\PhpOffice\PhpSpreadsheet\IOFactory::load($tmpname);
    $data=$Spreadsheet->getActiveSheet()->toArray();
    $values="";
    foreach($data as $key=>$val){
        $values.="(";
        foreach($val as $k=>$v ){
            $values.=$v;
            if(isset($val[$k+1]) && !empty($val[$k+1])){ 
                $values.=',';
            }
        }
        $values.=")";
        echo "<pre>";
        echo $values;
        $values="";  
    }
}
?>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Upload excel</label><br>
    <input type="file" name="myfile" id="myfile"><br>
    <button type="submit" name="upload_btn">Upload</button>
</form>
