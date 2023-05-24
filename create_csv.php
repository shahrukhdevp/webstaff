<?php
$csv_data=Array();
$csv_data=array(array('Name','Age'),array('Rahul',23));
echo "<pre>";
print_r($csv_data);

die;
$file=fopen('mycsv.csv','w') or die("Can't create file");
foreach ($csv_data as $key => $value) {

  fputcsv($file,$value);
}
fclose($file);
echo 'CSV CREATED WITH DATA';
?>
