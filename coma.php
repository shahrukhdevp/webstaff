

<?php
 ob_start();

//header("Cache-Control: no-cache");
$a="hello ";
$k++;
$a.=ob_get_contents();
echo $a++; die;
ob_end_flush();
?>