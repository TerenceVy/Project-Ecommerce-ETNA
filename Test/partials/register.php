<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
  <head>
    <?php
       
       $db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
       if (isset($_POST['send']))
       $login = htmlspecialchars($_POST['login']);
       $mail =  htmlspecialchars($_POST['mail']);
       $password = sha1($_POST['password']);
       $password2 = sha1($_POST['password2']);
       if(!empty($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password2']))
       {
       $passwordlenght = strlen($password);
       $maillenght = strlen($mail);
       $loginlenght = strlen($login);
       if($loginlenght <=225)
			  {
			  }
			  else
			  {
			  $erreur = "Votre login contient plus de 255 caracteres";
			  }
			  if($loginlenght <=225)
					     {
					     }
					     else
					     {
					     $erreur = "Votre mail contient plus de 255 caracteres";
					     }
					     if($loginlenght <=225)
								{
								}
								else
								{
								$erreur = "Votre mail contient plus de 255 caracteres";
								}
								if ($password == $password2)
								{
								$insertinusers = $db->prepare("INSERT INTO users(login, mail, password) VALUES (?, ?, ?)");
					     $insertinusers->execute(array($login, $mail, $password));
			  $erreur = "Votre compte a bien Ã©tÃ© ajoutÃ©";
			  }
			  else
			  {
			  $erreur = "Vos mots de passes ne sont pas semblables";
			  }
			  }
			  else
			  {
			  $erreur = "Tous les champs ne sont pas complÃ©ter";
			  }
			  
			  ?>
       <meta charset="utf-8"/>
       <title>Etna Manga</title>
  </head>
  
  
  <body>
    <img src="../assets/images/Bande.png">
    <img src="../assets/images/Bande.png" class="bande2">
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png" value="accueil">
    </form>
    <img src="../assets/images/secured.png" class="secured">
    <img src="../assets/images/cb.png" class="cb">
    <a href="contact.php" target="_blank">Contact us</a>
    <div align="center">
      <div class="etna"> ETNA MANGA </div>
      <br><br><br><br><br><br><br><br><br>
      <form action="login.php" method="POST">
	Prenom: <br>
	<input type="text" name="Prenom" required><br>
	Nom: <br>
	<input type="text" name="Nom" required><br>
	Email: <br>
	<input type="email" name="email" required><br>
	Reemail: <br>
	<input type="email" name="reemail" required><br>
	Password: <br>
	<input type="Password" name="passwd" required><br>
	Repassword: <br>
	<input type="Password" name="repasswd" required><br>
	<input type="Submit" value="Register">
      </form>
    </div>
  </body>
  
</html>
