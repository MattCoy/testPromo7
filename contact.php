<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Contactez moi</h1>
	<?php 
	echo date('d/m/Y');
	//nouvelle fonctionnalité ajoutée via une branche	
	if(isset($_POST['message'])){
		echo 'message envoyé';
	}
	
	//ajout 
	echo'kljhlkjgh';

	echo'lkjhglkjg';

	?>
	<form method="post">
		<input type="text" name="message">
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>