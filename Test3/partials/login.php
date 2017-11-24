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

    <div class="wrapper">
    <header>
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
    </header>
    <br><br><br>
   <table>
  <div align="center">
    <form method="POST">
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
    </table>
    <main>
  </div>
    </main>

    <footer>
  <br><br>
  </footer>
  </div>
  </body>
  
</html>
