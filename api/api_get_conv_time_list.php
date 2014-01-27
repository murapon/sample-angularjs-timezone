<?php
require dirname(__FILE__). "/Timezone.php";
$time = $_REQUEST['time'];
$timezone = $_REQUEST['timezone'];
$conv_time_list = Timezone::getConvTimeList($time, $timezone);
echo json_encode($conv_time_list);
?>
