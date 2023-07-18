<?php
$tanggal = date('Y-m-d');
	$th_lalu = date('Y-m-d', strtotime('-1 year', strtotime($tanggal)));
	$bl_lalu = date('Y-m-d', strtotime('-6 month', strtotime($tanggal)));
echo $th_lalu ; 
echo '<br>';
echo $bl_lalu ;
?>