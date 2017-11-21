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
  }
  else
  {
    echo "Verifiez vos informations";
  }
}
?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
  <head>
    <meta charset="utf-8"/>
    <title>Connection to ETNA</title>
  </head>
  
  
  <body>
<img src="../assets/images/Bande.png">
    <img src="../assets/images/Bande.png" class="bande2">
    <img src="../assets/images/secured.png" class="secured">
    <img src="../assets/images/cb.png" class="cb">
    <form action="../index.php"> 
      <input class="image" type="image" src="../assets/images/accueilbutton.png" value="accueil">
    </form>
    <div align="center">
      <div class="etna"> ETNA MANGA </div>
    </div>
    <img src="../assets/images/vs.png" class="mid">
    <table>
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
  </body>
  
</html>
