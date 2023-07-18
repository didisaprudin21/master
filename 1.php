<?php 
	
date_default_timezone_set('Asia/Jakarta');
// $time1 = date('H:i');
$time1 = '15:16:00';
$time2 = '02:00:00';

$time1_unix = strtotime(date('Y-m-d').' '.$time1);
$time2_unix = strtotime(date('Y-m-d').' '.$time2);

$begin_day_unix = strtotime(date('Y-m-d').' 00:00:00');

$jumlah_time = date('H:i:s', ($time1_unix + ($time2_unix - $begin_day_unix)));

echo $jumlah_time;
?>