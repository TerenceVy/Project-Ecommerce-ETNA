<!DOCTYPE html>
<?php
$db = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t',root,'salutlesbro');

if(isset($_POST['formregister']))
{
	echo 'bite';
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
      <form action="" method="POST">
      	<table>
      		<tr>
      			<td><input type="text" placeholder="Nom"></td>
      		</tr>	
      		<tr>
      			<td><input type="text" placeholder="Prénom"></td>
      		</tr>
      		<tr>
      			<td><input type="email" placeholder="Adresse mail"></td>
      		</tr>
      		<tr>
      			<td><input type="email" placeholder="Confirmation adresse mail"></td>
      		</tr>
      		<tr>
      			<td><input type="password" placeholder="Mot de passe"></td>
      		</tr>
      		<tr>
      			<td><input type="password" placeholder="Confirmation mot de passe"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Date de naissance"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Ville"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Adresse"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Code postale"></td>
      		</tr>
      		<tr>
      			<td><input type="text" placeholder="Pays"></td>
      		</tr>
			<input type="Submit" name="formregister" value="S'inscrire">
    	</table>
      </form>
  	</div>	
  </body>
  
</html>
