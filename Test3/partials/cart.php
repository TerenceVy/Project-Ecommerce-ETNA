<?php
session_start();

$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');

echo $_SESSION['ID'];
$add = $_POST['submit'];

if (isset($_SESSION['ID']))
{
    $buy = $db->prepare('INSERT INTO Produit_Utilisateur VALUES (?,?)');
    $buy->execute(array($add, $_SESSION['ID']));

}

if (isset($_POST['delete'])) {
    $del = $db->prepare('DELETE FROM Produit_Utilisateur WHERE ID_utilisateur = ?');
    $del->execute(array($_SESSION['ID']));
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
  </head>
  <body>
  <?php
$req = $db->prepare('SELECT Produits.ID, Libelle, Description, Prix_vente, Nombres_produit FROM Produits INNER JOIN Produit_Utilisateur ON Produits.ID = Produit_Utilisateur.ID_produit INNER JOIN Utilisateurs ON Produit_Utilisateur.ID_utilisateur = Utilisateurs.ID WHERE Utilisateurs.ID = ?');
    $req->execute(array($_SESSION['ID']));
    $count = $req->rowCount();
    $results = $req->fetchALL();
    if ($count != 0)
    {
    	?>
	<table align="center" border="1" style="text-align: center; margin-top: 10%">
    <tr>
        <td><p style="font-size: 20px"> Produit </p></td>
        <td><p style="font-size: 20px"> Libelle </p></td>
        <td><p style="font-size: 20px"> Description </p></td>
        <td><p style="font-size: 20px"> Prix de vente </p></td>
        <td><p style="font-size: 20px"> Nombre de produit </p></td>
    </tr>
    <?php
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
    <tr>
        <td><form name="Delete" method="post" action="cart.php">
            <button>Delete Cart<input type="hidden" name="delete" value="del"></button>
        </form></td>
    </tr>
	<?php
}
}
else
echo "Votre panier est vide";
echo $_POST['submit'];
?>
</table>
  </body>
</html>