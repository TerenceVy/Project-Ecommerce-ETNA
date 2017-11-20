<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>

<body>
	DESCRIPTION

	<table border="1" bgcolor="lightblue">
	<tr>
		<td>ID du produit</td>
		<td>Libelle</td>
		<td>Description</td>
		<td>Prix de vente</td>
		<td>Nombre de produit</td>
	</tr>
	<?php 
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$req = $db->prepare('SELECT ID, Libelle, Description, Prix_vente, Nombres_produit FROM Produits');
    $req->execute();
	$results = $req->fetchALL();
	foreach ($results as $key) {
		?>
	<tr>
	<td>
		<?php
	echo $key['ID'];?></td>
	<td>
		<?php
	echo $key['Libelle'];?></td>
	<td><?php
	echo $key['Description'];?></td>
	<td><?php
	echo $key['Prix_vente'] . "";?></td>
	<td><?php
	echo $key['Nombres_produit'];?></td>
	</tr>
<?php	
}
?>
</table>
</body>
</html>