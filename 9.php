<!DOCTYPE html>
<html>
<head>
	<title>Fungsi dari PHP $_SERVER di PHP Global</title>
	<style type="text/css">
		*{
			margin: 0; padding: 0;
		}
		.container{
			width: 800px;
			margin: auto;
			border: 2px dotted red;
			margin-top: 50px;
		}
		h1{text-align: center;
			border-bottom: 2px dotted red;
			height: 50px;
			line-height: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Fungsi dari PHP $_SERVER di PHP Global</h1>
	<?php
		echo $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['REMOTE_ADDR'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
		echo "<br>";
		echo $_SERVER['REMOTE_PORT'];
		
	?>	
	</div>
</body>
</html>