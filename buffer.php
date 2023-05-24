<?php
ob_start();
echo "hello";
ob_end_flush();
ob_end_clean();
ob_start();
echo "hello2";
?>