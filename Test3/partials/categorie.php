<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
    <meta charset="utf-8">
    <title>Categorie</title>
  </head>
  <body>
    <div class="wrapper">
    <header>
      <main>
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
    <form action="partials/pop.php">
      <div class="pop1">
        <input type="submit" value="  Figurine Pop   " style="position: initial; top: 50px; left: 150px;">
      </div>
    </form>
    <form action="partials/manga.php" method="POST">
      <div class="achat2">
        <input type="submit" value="  Manga   " name="1" style="position: fixed; top: 50px; left: 280px;">
      </div>
    </form>
    <form action="partials/blu-ray.php">
      <div class="achat3">
        <input type="submit" value="  Blu-ray   " style="position: fixed; top: 50px; left: 380px;">
      </div>
    </form>
  </header>


<table align="center" border="1" style="text-align: center; margin-top: 10%">
    <tr>
        <td><p style="font-size: 20px"> Produit </p></td>
        <td><p style="font-size: 20px"> Libelle </p></td>
        <td><p style="font-size: 20px"> Description </p></td>
        <td><p style="font-size: 20px"> Prix de vente </p></td>
        <td><p style="font-size: 20px"> Nombre de produit </p></td>
        <td><p style="font-size: 20px"> ID </p></td>
    </tr>
    <?php
    echo $_POST['cat']; 
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$req = $db->prepare('SELECT Produits.ID, Produits.Libelle, Produits.Description, Prix_vente, Nombres_produit FROM Produits INNER JOIN Categories ON Categories.ID = Produits.Categorie WHERE Categories.ID = ?');
    $req->execute(array($_POST['cat']));
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
    <td><form method="post" action="cart.php">
        <button type="submit" value="BUY IT" name="Buy">Add to cart
        <input type="hidden" name="submit" value=<?php echo $key['ID'] ?>>
        </button>
        </form>
        </td>
        <?php echo $_POST['submit'];?>
    </tr>
<?php   
}
?>
</table>

</main>
</div>
<footer>
    <br>
</footer>
  </body>
</html>