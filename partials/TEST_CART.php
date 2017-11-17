<!DOCTYPE html>
<html>
<head>
	<title>Description produit</title>
</head>

<body>
	DESCRIPTION
<?php 
$test = $db->prepare("SELECT * FROM Produits WHERE ID = 2");
    $test->execute();
   $results = ($db->fetchALL(PDO::FETCH_ASSOC));

echo $results['ID'];
echo $results['Libelle'];
echo $results['Description'];
echo $results['Prix_vente'];
echo $results['Nombres_produit'];
?>



</body>
</html>