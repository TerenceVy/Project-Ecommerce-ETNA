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

   $i = 0;
   $results = $db->fetchALL(PDO::FETCH_ASSOC);
while(isset($results[$i]['ID']))
{
echo $results[$i]['ID'];
echo $results[$i]['Libelle'];
echo $results[$i]['Description'];
echo $results[$i]['Prix_vente'];
echo $results[$i]['Nombres_produit'];
$i++;
}
?>



</body>
</html>