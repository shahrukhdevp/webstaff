<?php header("Content-type: application/json;"); ?>
<?php
 $json = file_get_contents("php://input");
 print_r($json);
?>