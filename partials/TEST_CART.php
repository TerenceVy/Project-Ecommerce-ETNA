<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>

<body>
	DESCRIPTION

<?php 
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$test = $db->prepare('SELECT * FROM Produits WHERE ID = 2 ');
    $test->execute();
$results = $test->fetchALL();
foreach ($results as $key) {
	?>
	<table border="5">
		<tr><?php
	echo $key['ID'];?></tr>
	<tr><br><?php
	echo $key['Libelle'];?></tr>
	<tr><?php
	echo $key['Description'];?></tr>
	<tr><?php
	echo $key['Prix_vente'];?></tr>
	<tr><?php
	echo $key['Nombres_produit'];?></tr>
	</table>
<?php	
}
?>

</body>
</html>