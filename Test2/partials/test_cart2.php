<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>
<body>
<img src="" style="width: 5%; height: auto">
	<table align="center" border="1" style="text-align: center">
	<tr>
		<td><p style="font-size: 20px"> Produit </p></td>
		<td><p style="font-size: 20px"> Libelle </p></td>
		<td><p style="font-size: 20px"> Description </p></td>
		<td><p style="font-size: 20px"> Prix de vente </p></td>
		<td><p style="font-size: 20px"> Nombre de produit </p></td>
	</tr>
	<?php 
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$req = $db->prepare('SELECT ID, Libelle, Description, Prix_vente, Nombres_produit FROM Produits');
    $req->execute();
	$result = $req->fetchALL();
	foreach ($result as $key) {
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