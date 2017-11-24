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
    <form action="partials/categorie.php" method="POST">
      <div class="pop1">
        <button>Figurine POP<input type="hidden" value="2" name="cat"></button>
      </div>
    </form>
    <form action="partials/categorie.php" method="POST">
      <div class="achat2">
        <button>Manga<input type="hidden" value="1" name="cat"></button>
      </div>
    </form>
    <form action="partials/categorie.php" method="POST">
      <div class="achat3">
        <button>Blu-ray<input type="hidden" value="3" name="cat"></button>
      </div>
    </form>
    </header>
  <main>
    <center>
        <img src="assets/images/Myhero.png" class="myhero" style="margin-top: 10%;">
    </center>
    <div class="search">
  <form name="frmSearch" method="post" action="partials/search.php">
      <input name="var1" type="text" id="var1" placeholder="Keyword">
      <input type="submit" value="Search">
</form>
</div>
</main>
  <footer>
  <p><br></p>
  </footer>
  </div>
</body>
</html>