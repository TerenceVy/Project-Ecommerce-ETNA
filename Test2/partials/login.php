<?php
session_start();

$bd = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');

if (isset($_POST['Connection']))
{
  $log_mail = htmlspecialchars($_POST['email']);
  $log_passwd = hash('sha256', $_POST['passwd']);
  $requser = $bd->prepare("SELECT * FROM Utilisateurs WHERE Mail = ? AND Password = ?");
  $requser->execute(array($log_mail, $log_passwd));
  $count = $requser->rowCount();
  if($count == 1)
  {
    $userinfo = $requser->fetch();
    $_SESSION['ID'] = $userinfo['ID'];
    $_SESSION['Mail'] = $userinfo['Mail'];
    header("Location: ../index.php?ID=".$_SESSION['ID']);
  }
  else
  {
    echo "Verifiez vos informations";
  }
}
?>

<!DOCTYPE html>
<html> 
  <head>
  <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
    <meta charset="utf-8"/>
    <title>Connection to ETNA</title>
  </head>
  
  <body>
  <div id='global'>
    <header>
    <form action="../index.php">
      <input class="image" type="image" src="assets/images/accueilbutton.png" style="width: 7%; height: auto">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
    <input type="search" name="search" style="position: fixed; top: 25px; right: 50px">
    </header>
    <div id='menu-gauche'>
    <p>Ceci est un autre test</p>
  </div>
  <div id="blanc"><p> </p></div>
  <div id='contenu' align="center">
    <table style="margin-top: 35%">
      <center>
	<div align="center">
	  <form method="POST"> <br><br><br><br>
	    <input type="email" name="email" placeholder="Your email" required><br>
	    <br>
	    <input type="Password" name="passwd" placeholder="Password" required><br>
	    <br>
	    <input type="Submit" value="Sign in" name="Connection">
	  </form>
	  <form action="register.php">
	    <input type="Submit" value="Register">
	  </form>
	</div>
      </center>
    </table>
    </div>
    <footer>
  <p>Test2</p>
  </footer>
  </body>
  
</html>
