<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Contactez moi</h1>
	<?php 
	echo date('d/m/Y');
	
	if(isset($_POST['message'])){
		echo 'message envoyé';
	}
	?>
</body>
</html>