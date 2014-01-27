<?php
require dirname(__FILE__). "/Timezone.php";
$timezone_list = Timezone::getList();
echo json_encode($timezone_list);
?>
