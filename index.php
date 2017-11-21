<?php
session_start();

$bd = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/styles/style.css" type="text/css">
    <meta charset="utf-8"/>
    <title>Etna Manga</title>
  </head>

  <body>
    <img src="assets/images/Bande.png" class="bande">
    <img src="assets/images/Bande.png" class="bande2">
    <form action="index.php">
      <input class="image" type="image" src="assets/images/accueilbutton.png">
    </form>
    <img src="assets/images/cb.png" class="cb">
    <img src="assets/images/secured.png" class="secured">
    <img src="assets/images/Myhero.png" class="myhero">
    <img src="assets/images/Shigatsu.png" class="shigatsu">
    <img src="assets/images/Kuroko.png" class="kuroko">
    <img src="assets/images/Vol1Myhero.png " class="vol1">
    <img src="assets/images/PopMyhero.png" class="pop">
    <img src="assets/images/Blu-ray.png" class="bluray">
    <div align="center">
    <div class="etna"> ETNA MANGA</div>
    <div class="collection"> Collection My Hero Academia </div>
    <div class="text1"> My Hero Academia Vol.1 6.99$</div>
    <div class="text2"> Figurine Pop All Might 12.99$</div>
    <div class="text3"> Bluray My hero Academia S1 28.99$</div>
    <?php
    if (isset($_SESSION['ID']))
    {
      ?>
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
      <div class="cart">
        <input type="submit" value= "   Cart   ">
      </div>
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
    <form action="partials/manga.php">
      <div class="achat2">
        <input type="submit" value="  Manga   ">
      </div>
    </form>
    <form action="partials/blu-ray.php">
      <div class="achat3">
        <input type="submit" value="  Blu-ray   ">
      </div>
    </form>

    <div class="rating">
      <span>★ ★ ★ ★ ★ </span>
    </div>

    <div class="rating2">
      <span>★ ★ ★ ★ ☆ </span>
    </div>

    <div class="rating3">
      <span>★ ★ ★ ★ ☆ </span>
    </div>

  </body>

</html>


                                                                                     
