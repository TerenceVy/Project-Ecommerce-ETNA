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
	<table border="9999">
		<tr>
		<td>
		<?php
	echo $key['ID'];?></td>
	<td><?php
	echo $key['Libelle'];?></td>
	<td><?php
	echo $key['Description'];?></td>
	<td><?php
	echo $key['Prix_vente'];?></td>
	<td><?php
	echo $key['Nombres_produit'];?></td>
	</tr>
	</table>
<?php	
}
?>

</body>
</html>