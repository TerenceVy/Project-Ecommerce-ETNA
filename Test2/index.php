<?php
session_start();

$bd = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
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
        <input type="submit" value="   Login   ">
      </div>
    </form>
    <?php
    }
    ?>
    <div class="buy1">
      <input type="submit" value=" Buy it ">
    </div>
    <form action="partials/detailpop.php">
      <div class="buy2">
        <input type="submit" value=" Buy it ">
      </div>
    </form>
    <div class="buy3">
      <input type="submit" value=" Buy it ">
    </div>
    </div>
    <form action="partials/pop.php">
      <div class="achat1">
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
  <img src="assets/images/PopMyhero.png" class="Pop">

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