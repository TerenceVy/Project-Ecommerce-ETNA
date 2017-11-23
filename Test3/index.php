<?php
session_start();

try{
$db = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed:' . $e->getMessage();
}

$search = $_POST['var1'];

$req = $db->prepare("SELECT * FROM Produits WHERE Libelle LIKE ?");
$req->execute(array("%$search%"));
$count = $req->rowCount();
$results = $req->fetchALL();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Etna Manga</title>
  <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
  <meta charset="utf-8">
</head>
<body>
<div class="wrapper">
    <header>
    <form action="index.php">
      <input class="image" type="image" src="assets/images/accueilbutton.png">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
    <?php
    if (isset($_SESSION['ID']))
    {
      ?>
      <form action="partials/cart.php">
      <div class="cart">
        <input type="submit" value= "   Cart   ">
      </div>
      </form>
      <div class="signin"><?php echo $_SESSION['Mail']; ?></div>
      <form action="partials/logout.php">
      <div class="signin">
        <input type="submit" value="   Log out   ">
      </div>
      </form>
      <?php
    }
    else
    {
      ?>
      <form action="partials/login.php">
      <div class="signin">
        <input type="submit" value="   Login   " style=" top:70px; left:50%; ">
      </div>
    </form>
    <?php
    }
    ?>
    <form action="partials/pop.php">
      <div class="pop">
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
  <main>
    <center>
        <img src="assets/images/Myhero.png" class="myhero" style="margin-top: 10%;">
    </center>
  <form name="frmSearch" method="post" action="index.php">
      <input name="var1" type="text" id="var1">
      <input type="submit" value="Search">
</form>
<?php echo $search; ?>
	<?php
if ($count != 0)
{
	?>
<table align="center" border="1" style="text-align: center; margin-top: 10%">
    <tr>
        <td><p style="font-size: 20px"> Produit </p></td>
        <td><p style="font-size: 20px"> Libelle </p></td>
        <td><p style="font-size: 20px"> Description </p></td>
        <td><p style="font-size: 20px"> Prix de vente </p></td>
        <td><p style="font-size: 20px"> Nombre de produit</p></td>
    </tr>
    <?php
    foreach ($results as $key) {
        ?>
    <tr>
    <td>
    <?php
    $img = "assets/images/" . $key['ID'] . ".png";
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
} ?> 
</table>
<img src="assets/images/1.png">
<?php
}
else {
echo 'There is nothing to show';
}
    ?>
  </div>
</main>
  <footer>
  <p>Test2</p>
  </footer>
  </div>
</body>
</html>