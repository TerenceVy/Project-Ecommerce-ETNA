<?php
session_start();

$bd = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
</head>
<body>
<div class="wrapper">
    <header>
    	<form action="test.php">
	    <input class="image" type="image" src="../assets/images/accueilbutton.png">
	    </form>
	    <div class="etna"> ETNA MANGA </div>
	    <?php
    if (isset($_SESSION['ID']))
    {
      ?>
      <form action="cart.php">
      <div class="cart">
        <input type="submit" value= "   Cart   ">
      </div>
      </form>
      <div class="signin"><?php echo $_SESSION['Mail']; ?></div>
      <form action="logout.php">
      <div class="signin">
        <input type="submit" value="   Log out   ">
      </div>
      </form>
      <?php
    }
    else
    {
      ?>
      <form action="login.php">
      <div class="signin">
        <input type="submit" value="   Login   ">
      </div>
    </form>
    <?php
    }
    ?>
    <form action="pop.php">
      <div class="pop">
        <input type="submit" value="  Figurine Pop   ">
      </div>
    </form>
    <form action="manga.php">
      <div class="manga">
        <input type="submit" value="  Manga   ">
      </div>
    </form>
    <form action="blu-ray.php">
      <div class="blu-ray">
        <input type="submit" value="  Blu-ray   ">
      </div>
    </header>
    <main>I'm the main-content filling the void!
    </main>
    <footer>I'm a 30px tall footer</footer>
</div>
</body>
</html>