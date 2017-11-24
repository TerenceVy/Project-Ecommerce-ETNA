<?php
session_start();

try{
$db = new PDO('mysql:host=localhost;dbname=etnamanga_vy_t', 'root', 'salutlesbro');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Connection failed:' . $e->getMessage();
}

$search = $_POST['var1'];

$req = $db->prepare("SELECT * FROM Produits WHERE Libelle LIKE ?");
$req->execute(array("%$search%"));
$count = $req->rowCount();
$results = $req->fetchALL();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Etna Manga</title>
  <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
  <meta charset="utf-8">
</head>
<body>
<div class="wrapper">
    <header>
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png">
    </form>
    <div class="etna" style="margin-left: 35%"> ETNA MANGA </div>
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
        <input type="submit" value="   Login   " style=" top:70px; left:50%; ">
      </div>
    </form>
    <?php
    }
    ?>
    <form action="categorie.php" method="POST">
      <div class="pop1">
        <button>Figurine POP<input type="hidden" value="2" name="cat"></button>
      </div>
    </form>
    <form action="categorie.php" method="POST">
      <div class="achat2">
        <button>Manga<input type="hidden" value="1" name="cat"></button>
      </div>
    </form>
    <form action="categorie.php" method="POST">
      <div class="achat3">
        <button>Blu-ray<input type="hidden" value="3" name="cat"></button>
      </div>
    </form>
    <div class="search">
  <form name="frmSearch" method="post" action="search.php">
      <input name="var1" type="text" id="var1" placeholder="Keyword">
      <input type="submit" value="Search">
      </form>
      </div>
    </header>
  <main>
	<?php
if ($count != 0)
{
	?>
<table align="center" border="1" style="text-align: center; margin-top: 10%">
    <tr>
        <td><p style="font-size: 20px"> Produit </p></td>
        <td><p style="font-size: 20px"> Libelle </p></td>
        <td><p style="font-size: 20px"> Description </p></td>
        <td><p style="font-size: 20px"> Prix de vente </p></td>
        <td><p style="font-size: 20px"> Nombre de produit</p></td>
    </tr>
    <?php
    foreach ($results as $key) {
        ?>
    <tr>
    <td>
    <?php
    $img = "../assets/images/" . $key['ID'] . ".png";
    echo "<img src='$img' style='width: 86px; height : auto'>";
    ?>
    </td>
    <td>
        <?php
    echo $key['Libelle'];?></td>
    <td><?php
    echo $key['Description'];?></td>
    <td><?php
    echo $key['Prix_vente'] . " $";?></td>
    <td><?php
    echo $key['Nombres_produit'];?></td>
    <td><form method="post" action="cart.php">
        <button type="submit" value="BUY IT" name="Buy">Add to cart
        <input type="hidden" name="submit" value=<?php echo $key['ID'] ?>>
        </button>
        </form></td>
    </tr>
	<?php
}
?>
</table>
<?php
}
else {
echo ' : There is nothing to show';
}
    ?>
    <br><br><br><br><br><br>
</center>
</main>
<footer>
  <p>Test2</p>
  </footer>
</div>
</body>
</html>