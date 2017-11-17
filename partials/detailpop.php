<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
    <title>Detail POP</title>
  </head>
  
  <body>
<img src="../assets/images/Bande.png">
    <img src="../assets/images/Bande.png" class="bande2">
    <img src="../assets/images/secured.png" class="secured">
    <img src="../assets/images/cb.png" class="cb">
    <div class="etna"> ETNA MANGA </div>
    <a href="contact.php" target="_blank">Contact us</a>
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png" value="accueil">
    </form>
    <img src="../assets/images/PopMyhero.png" class="allmight"></div>
    <b><div class="detail">Figurine POP du plus grand des super héros, All Might pour seulement 12.99$</div></b>
    <ul>
      <li>Figurine de Collection</li>
      <li>Dimension 15x12 cm</li>
      <li>Plastique Rigide</li>
      <li>Couleur Unique</li>
      <li>Plastique Rigide</li>
    </ul>
    <form action="index.php">
      <div class="add">
	<input type="submit" src="assets/images/Cart.png" value="Ajouter au panier">
      </div>
      <div class="articles">
<?php require('Panier.class.php'); 
    session_start();

    $GLOBALS['products'] = array(
    array('id'=>'P01','designation' => 'Produit 1', 'price' => '12.99'));
$panier = Panier::getInstance();
 
    if(isset($_GET['add'])){
    $panier->add($_GET['add']);
    }
    if(isset($_GET['del'])){
    $panier->delete($_GET['del']);
    }
    if(isset($_GET['cancel'])){
    $panier->clean();
    }
    $selection = $panier->getSelection();
?>
    <table cellpadding="5" cellspacing="0" border="1">
            <?php foreach($GLOBALS['products'] as $k => &$product){ ?>
                <tr>
                    <td><?php echo $product['id']?></td>
                    <td><?php echo $product['designation']?></td>
                    <td><?php echo $product['price']?>€</td>
                    <td><a href="pop.php?add=<?php echo $k ?>">Ajouter</a></td>
                </tr>
                <?php } ?>
    </div>
    </table>
  </div>
  </body>
</html>