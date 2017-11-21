<?php
session_start();
echo $_SESSION['ID'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
  </head>
  <body>
<table align="center" border="1" style="text-align: center; margin-top: 10%">
    <tr>
        <td><p style="font-size: 20px"> Produit </p></td>
        <td><p style="font-size: 20px"> Libelle </p></td>
        <td><p style="font-size: 20px"> Description </p></td>
        <td><p style="font-size: 20px"> Prix de vente </p></td>
        <td><p style="font-size: 20px"> Nombre de produit </p></td>
    </tr>
    <?php
    $db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$req = $db->prepare('SELECT Produits.ID, Libelle, Description, Prix_vente, Nombres_produit FROM Produits INNER JOIN Produit_Utilisateur ON Produits.ID = Produit_Utilisateur.ID_produit INNER JOIN Utilisateurs ON Produit_Utilisateur.ID_utilisateur = Utilisateurs.ID WHERE Utilisateurs.ID = ?');
    $req->execute(array($_SESSION['ID']));
    $count = $req->rowCount();
    if ($count != 0)
    {
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
}
else
echo "Votre panier est vide";
?>
</table>
  </body>
</html>