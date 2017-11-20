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
  // $results = ($db->fetchALL(PDO::FETCH_ASSOC));
$results = $test->fetchALL();
foreach ($results as $key) {
echo $key['ID'];
echo $key['Libelle'];
echo $key['Description'];
echo $key['Prix_vente'];
echo $key['Nombres_produit'];
}
?>



</body>
</html>