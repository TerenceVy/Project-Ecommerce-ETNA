<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>
<body>
	DESCRIPTION
<img src="" style="width: 5%; height: auto">
	<table border="1" bgcolor="lightblue">
	<tr>
		<td>Produit</td>
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