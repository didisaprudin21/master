<!DOCTYPE html>
<html>
<head>
<title>Grab Konten Website Lain Dengan CURL</title>
<style>
   table {
	   text-align:center; border:solid 1px #af0069;}
   th {background-color:#c70039; color:#fff;}
   tr, td {width:110px; height:38px;}
   tr:nth-child(odd) {background:#e6b566;}
   tr:nth-child(even) {background:#e8e9a1;}
</style>
</head>
<body>
<?php
function get_web_page($url)
{
   $options = array(
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_HEADER => false,
     CURLOPT_FOLLOWLOCATION => true,
     CURLOPT_ENCODING => "",
     CURLOPT_USERAGENT => "spider",
     CURLOPT_AUTOREFERER => true,
     CURLOPT_CONNECTTIMEOUT => 120,
     CURLOPT_TIMEOUT => 120,
     CURLOPT_MAXREDIRS => 10,
     CURLOPT_SSL_VERIFYPEER => false
   );
   $ch = curl_init( $url );
   curl_setopt_array( $ch, $options );
   $content = curl_exec( $ch );
   $err = curl_errno( $ch );
   $errmsg = curl_error( $ch );
   $header = curl_getinfo( $ch );
   curl_close( $ch );
   return $content;
}
$code = get_web_page("https://kurs.dollar.web.id/bank.php/?/@bca");
$pecah = explode("<table cellspacing='0'>", $code);
$final_table = explode("</table>", $pecah[1]);
$data = $final_table[0];
echo "<table>";
echo $data;
echo "</table>";
?>
</body>
</html>