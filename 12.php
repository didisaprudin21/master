<?php 
function curl($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);  
    curl_close($ch);      
    return $output;
}

$curl = curl("https://sandbox.rachmat.id/curl/get/");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);

?>

<!DOCTYPE html>
<html>
<body>

<table border="1">
<tr>
	<th> ID </th>
	<th> Title </th>
	<th> URL </th>
</tr>
<?php foreach($data as $row){ ?>
<tr>
	<td><?php echo $row["ID"]; ?></td>
	<td><?php echo $row["Title"]; ?></td>
	<td><a href="<?php echo $row["URL"]; ?>" target="_blank"><?php echo $row["URL"] ?></a></td>
</tr>
<?php } ?>
</table>

</body>
</html>