<?php
session_start();
?>

<!DOCTYPE html>
<?php
$db = new PDO ('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');

if(isset($_POST['formregister']))
  {
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $password = hash('sha256', $_POST['password']);
    $password2 = hash('sha256', $_POST['password2']);
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $date = ($_POST['date']);
    $ville = ($_POST['ville']);
    $adresse = ($_POST['adresse']);
    $pays = ($_POST['pays']);
    $postale = ($_POST['postale']);
    $role = 1;
      if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['date']) && !empty($_POST['ville']) && !empty($_POST['adresse']) && !empty($_POST['postale']) && !empty($_POST['pays'])) 
        {
    
        if ($mail == $mail2)
          {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL))
              {
                $requser = $db->prepare("SELECT * FROM Utilisateurs WHERE Mail = ?");
                $requser->execute(array($mail));
                $nb = $requser->rowCount();
                  if ($nb == 0)
                  {
                    if ($password == $password2)
                      {
                        $insertuser = $db->prepare("INSERT INTO Utilisateurs (Nom, Prenom, Mail, Password, Date_de_naissance, Ville, Adresse, Code_postale, Pays, Role ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
                        $insertuser->execute(array($nom, $prenom, $mail, $password, $date, $ville, $adresse, $postale, $pays, $role));
                        $msg = 'Votre compte a bien été ajouté';
                        header("Location: login.php");
                      }
                    else 
                      {
                        $msg = 'Les mots de passe de sont pas similaires';
                      }
                    }
                  else
                  {
                    $msg = 'Cette adresse email est deja utilise';
                  }
              }
            else
            {
              $msg = 'Veuillez rentrer une adresse mail valide';
            }
          }
        else 
        {
          $msg = 'Les adresses mail ne sont pas semblables';
        }
      }
      else
      {
        $msg = "Tous les champs doivent être complétés";
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
    <div class="wrapper">
    <header>
      <form action="test.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png">
      </form>
      <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
      </header>
      
      <main><center>
      <form action="" method="POST">
        <table style="align-content: center;">
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
            <td><input type="text" placeholder="YYYY/MM/DD" name="date"></td>
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
          <tr>
          <td>
      <input type="Submit" name="formregister" value="S'inscrire">
      </td>
      </tr>
      </table>
      </form>
    </center>
      <?php
        if(isset($msg))
          {
            echo "$msg";
          }
      ?>
      <center>
        <img src="../assets/images/steins.png" class="myhero" style="margin-top: 0%;">
    </center>
    </main>
    <footer><br><br></footer>
  </div>
  </body>  
</html>
