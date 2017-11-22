<?php
session_start();

mysql_connect("localhost","root","salutlesbro") or die(mysql_error());
mysql_select_db("etnamanga_vy_t") or die("could not find db");
$output = '';
if(isset($_POST['search']))
{
  $searcher = $_POST['search'];
  $searcher = preg_replace("#[^0-9a-zA-Z]#","",$searcher);

  $query = mysql_query("SELECT * FROM Produits WHERE Libelle LIKE '%$searcher%'") or die("Could not search");
  $count = mysql_num_rows($query);
  if ($count == 0)
  {
    $output = 'Aucun résultats trouvés';
  }
  else
  {
    while($row = mysql_fetch_array($query))
    {
      $fproducts = $row['Libelle'];
      $id = $row['ID'];
      $output .= '<div>'.$fproducts.'</div>';
    }
  }
}

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
    <form action="index.php" method="POST">
    <input type="search" name="search" placeholder="Search" style="position: fixed; top: 25px; right: 60px">
    <input type="submit" value="Search" style="position: fixed; top: 25px; right:5px; ">
  </form>
  <div class="selected">
<?php print("$output");?></div>
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
        <input type="submit" value="   Login   ">
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