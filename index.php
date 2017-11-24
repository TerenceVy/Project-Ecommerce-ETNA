<?php
session_start();
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
        <div class="search">
  <form name="frmSearch" method="post" action="partials/search.php">
      <input name="var1" type="text" id="var1" placeholder="Keyword">
      <input type="submit" value="Search">
</form>
</div>
    <div class="etna"> ETNA MANGA </div>
    <?php
    if (isset($_SESSION['ID']))
    {
      ?>
      <form action="partials/cart.php">
      <div class="cart">
        <input type="submit" value= "   Cart   ">
      </div>
      </form>
      <div class="signin1"><?php echo "Bienvenu " . $_SESSION['Mail']; ?></div>
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
    <form action="partials/categorie.php" method="POST">
      <div class="pop">
        <button>Figurine POP<input type="hidden" value="2" name="cat"></button>
      </div>
    </form>
    <form action="partials/categorie.php" method="POST">
      <div class="manga">
        <button>Manga<input type="hidden" value="1" name="cat"></button>
      </div>
    </form>
    <form action="partials/categorie.php" method="POST">
      <div class="blu-ray">
        <button>Blu-ray<input type="hidden" value="3" name="cat"></button>
      </div>
    </form>
    </header>
  <main>
    <center>
        <img src="assets/images/Myhero.png" class="myhero" style="margin-top: 10%;"> <p style="color: white">
    </center>
</main>
  <footer>
  <br>
  <img src="assets/images/cb.png" style="width: 150px; height: auto; margin-left: 35px">
  <img src="assets/images/secured.png" style="width: 100px; height: auto; margin-left: 35px">
    <a href="partials/contact.php" target="_blank" style="color: grey; position: initial; bottom: 25px; left: 28%">Contact us</a>
  <br><br>
  </footer>
  </div>
</body>
</html>