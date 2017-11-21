<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>
<body>
	DESCRIPTION
<img src="" style="width: 5%; height: auto">
	<table border="1" align="center">
	<tr>
		<td><p style="font: 20"> Produit </p></td>
		<td><p style="font: 16"> Libelle </p></td>
		<td><p style="font: 16"> Description </p></td>
		<td><p style="font: 16"> Prix de vente </p></td>
		<td><p style="font: 16"> Nombre de produit </p></td>
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
	$img = "../assets/images/" . $key['ID'] . ".png";
	echo "<img src='$img' style='width: 86px; height : auto'>";
	?>
	</td>
	<td>
		<?php
	echo $key['Libelle'];?></td>
	<td><?php
	echo $key['Description'];?></td>
	<td><?php
	echo $key['Prix_vente'] . " $";?></td>
	<td><?php
	echo $key['Nombres_produit'];?></td>
	</tr>
<?php	
}
?>
</table>
</body>
</html>