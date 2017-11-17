<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>


<body>
</body>

<?php $db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
	 $test = $db->exec(SELECT * FROM `Produits` WHERE `ID` = 2)	;
	 


?>




</body>
</html>