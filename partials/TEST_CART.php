<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>


<?php 
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$test = $db->exec(SELECT * FROM `Produits` WHERE `ID` = 2)	;

   $i = 0;
   $results = $article->fetchALL(PDO::FETCH_ASSOC);
while($results[$i])
{
echo $results[$i]['ID'];
echo $results[$i]['Libelle'];
echo $results[$i]['Description'];
echo $results[$i]['Prix_vente'];
echo $results[$i]['Nombres_produit'];
$i++;
}
?>
<body>
DESCRIPTION





</body>
</html>