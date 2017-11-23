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
<div id='global'>
    <header>
    <form action="index.php">
      <input class="image" type="image" src="assets/images/accueilbutton.png" style="width: 7%; height: auto">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
    <input type="search" name="search" style="position: fixed; top: 25px; right: 50px">
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
        <input type="submit" value="   Login   " style="position: fixed; top:30px; right:100px; ">
      </div>
    </form>
    <?php
    }
    ?>
    <form action="partials/pop.php">
      <div class="pop">
        <input type="submit" value="  Figurine Pop   ">
      </div>
    </form>
    <form action="partials/manga.php" method="POST">
      <div class="achat2">
        <input type="submit" value="  Manga   " name="1">
      </div>
    </form>
    <form action="partials/blu-ray.php">
      <div class="achat3">
        <input type="submit" value="  Blu-ray   ">
      </div>
    </form>
    </header>
  <div id='menu-gauche'>
    <p>Ceci est un autre test</p>
  </div>
  <div id="blanc"><p> </p></div>
  <div id='contenu' align="center">
  <br><br><br><br><br><br><br><br><br>
  <div id="blanc"><p> </p></div>
  <img src="assets/images/Myhero.png" class="myhero">
  <form name="frmSearch" method="post" action="index.php">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="var1" type="text" id="var1">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
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
	<?php
}
}
else {
echo 'There is nothing to show';
}
    ?>
  <p>Je s'appelle GROOT</p>
  </div>
  <div id='sidebar-droite'>
    <p>Ceci est le test 3</p>
  </div>
  <footer>
  <p>Test2</p>
  </footer>
  </div>
</body>
</html>