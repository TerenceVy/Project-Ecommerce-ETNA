<!DOCTYPE html>
<?php
$db = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t',root,'salutlesbro');

if(isset($_POST['formregister']))
{
	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['date']) && !empty($_POST['ville']) && !empty($_POST['adresse']) && !empty($_POST['postale']) && !empty($_POST['pays'])) 
	{
		echo 'ok';
	}

	else
	{
		echo 'bite';
	}
}



?>

<html>
  <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
  <head>
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
  </div>
      <br><br><br><br><br><br><br><br><br>
    <div align="center">
      	<h3>Inscription</h3>
      	<br><br><br>
      <form action="lhiuhuphp" method="POST">
      	<table>
      		<tr>
      			<td><input type="text" placeholder="Nom" name="nom"></td>
      		</tr>	
      		<tr>
      			<td><input type="text" placeholder="Prénom" name="prenom"></td>
      		</tr>
      		<tr>
      			<td><input type="email" placeholder="Adresse mail" name="mail"></td>
      		</tr>
      		<tr>
      			<td><input type="email" placeholder="Confirmation adresse mail" name="mail2"></td>
      		</tr>
      		<tr>
      			<td><input type="password" placeholder="Mot de passe" name="password"></td>
      		</tr>
      		<tr>
      			<td><input type="password" placeholder="Confirmation mot de passe" name="password2"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Date de naissance" name="date"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Ville" name="ville"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Adresse" name="adresse"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Code postale" name="postale"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Pays" name="pays"></td>
      		</tr>
			<input type="Submit" name="formregister" value="S'inscrire">
    	</table>
      </form>
  	</div>	
  </body>
  
</html>
