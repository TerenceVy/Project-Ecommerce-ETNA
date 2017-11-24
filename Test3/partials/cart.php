<?php
session_start();

$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$add = $_POST['submit'];

if (isset($_SESSION['ID']))
{
    $buy = $db->prepare('INSERT INTO Produit_Utilisateur VALUES (?,?)');
    $buy->execute(array($add, $_SESSION['ID']));

}

if (empty($_SESSION['ID'])) {
    header("Location: login.php");
}

if (isset($_POST['delete'])) {
    $del = $db->prepare('DELETE FROM Produit_Utilisateur WHERE ID_utilisateur = ?');
    $del->execute(array($_SESSION['ID']));
}

$sum = $db->prepare('SELECT SUM(Prix_vente) FROM Produits INNER JOIN Produit_Utilisateur ON Produit_Utilisateur.ID_produit = Produits.ID WHERE Produit_Utilisateur.ID_utilisateur = ?');
$sum->execute(array($_SESSION['ID']));
$price = $sum->fetch();
?>


<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    <meta charset="utf-8">
    <title>Cart</title>
  </head>
  <body>
<div class="wrapper">
    <header>
      <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
    <form action="categorie.php" method="POST">
      <div class="pop">
        <button>Figurine POP<input type="hidden" value="2" name="cat"></button>
      </div>
    </form>
    <form action="categorie.php" method="POST">
      <div class="manga">
        <button>Manga<input type="hidden" value="1" name="cat"></button>
      </div>
    </form>
    <form action="categorie.php" method="POST">
      <div class="blu-ray">
        <button>Blu-ray<input type="hidden" value="3" name="cat"></button>
      </div>
    </form>
    <div class="search">
  <form name="frmSearch" method="post" action="search.php">
      <input name="var1" type="text" id="var1" placeholder="Keyword">
      <input type="submit" value="Search">
      </form>
      </div>
    </header>
<main>
  <?php
  if (isset($_POST['validate'])) {
    $val = $db->prepare('UPDATE Produits INNER JOIN Produit_Utilisateur ON Produit_Utilisateur.ID_produit = Produits.ID SET Nombres_produit = Nombres_produit - 1 WHERE Produit_Utilisateur.ID_utilisateur = ? AND Nombres_produit >= 0 ');
    $val->execute(array($_SESSION['ID']));
    $del = $db->prepare('DELETE FROM Produit_Utilisateur WHERE ID_utilisateur = ?');
    $del->execute(array($_SESSION['ID']));
    ?>
    <div class="empty"><center><?php echo "Achat effectue :"; ?></center></div> <?php
}
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
    echo $key['Prix_vente'] .  " $";?></td>
    </tr>
    <?php
}
?>
    <tr>
        <td><form name="Delete" method="post" action="cart.php">
            <button>Delete Cart<input type="hidden" name="delete" value="del"></button>
        </form></td>
    <td><form name="Confirm" method="post" action="cart.php">
            <button>Validate<input type="hidden" name="validate" value="validate"></button>
        </form></td>
        <td><?php echo "Prix total" . $price . " $"?></td>
    </tr>
	<?php
}
else{
    ?>
<center>
<div class="empty"><?php echo "Votre panier est vide"; ?></div>
</center> <?php }
?>
</table>
</main>
  <footer><br><br></footer>
  </div>
  </body>
</html>