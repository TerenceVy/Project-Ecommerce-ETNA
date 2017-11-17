<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>

<body>
	DESCRIPTION
<?php 
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$test = $db->exec(SELECT * FROM `Produits` WHERE `ID` = 2)	;

   $results = $db->fetchALL(PDO::FETCH_ASSOC);
while(isset($results['ID']))
{
echo $results['ID'];
echo $results['Libelle'];
echo $results['Description'];
echo $results['Prix_vente'];
echo $results['Nombres_produit'];
}
?>



</body>
</html>