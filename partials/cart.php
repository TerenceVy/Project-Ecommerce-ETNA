<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
    <title>Cart</title>
  </head>
  <body>
<img src="../assets/images/Bande.png">
    <img src="../assets/images/Bande.png" class="bande2">
    <img src="../assets/images/secured.png" class="secured">
    <img src="../assets/images/cb.png" class="cb">
    <div align="center">
      <div class="etna"> ETNA MANGA </div>
    </div>
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png" value="accueil">
    </form>
    <div class="cb"></div>
    <div class="secured"></div>
    <a href="contact.php" target="_blank">Contact us</a>
  </body>
</html>

<?php
require('Panier.class.php');
session_start();
// définition des products
$GLOBALS['products'] = array(
    array('id'=>'P01','designation' => 'Produit 1', 'price' => '35'),
    array('id'=>'P02','designation' => 'Produit 2', 'price' => '30'),
    array('id'=>'P03','designation' => 'Produit 3', 'price' => '25'),
    array('id'=>'P04','designation' => 'Produit 4', 'price' => '15'),
    array('id'=>'P05','designation' => 'Produit 5', 'price' => '37')
);
 
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
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <h2>Contenu du Panier :</h2>
        <?php if(count($selection) == 0){ ?>
            <strong>Votre panier est actuellement vide</strong>
        <?php }else{ ?>
            <table cellpadding="5" cellspacing="0" border="1">
                <tr>
                    <td>Id</td>
                    <td>Désignation</td>
                    <td>Prix Unitaire</td>
                    <td>Quantité</td>
                    <td>Prix</td>
                    <td>Action</td>
                </tr>
 
                <?php
                // initialisation total panier
                $totalPanier=0;
                foreach($selection as $k => &$product){ ?>
                    <tr>
                        <td><?php echo $product['id'] ?></td>
                        <td><?php echo $product['designation'] ?></td>
                        <td><?php echo $product['price'] ?>€</td>
                        <td><?php echo $product['quantity'] ?></td>
                        <td><?php $totalLigne = $product['price']*$product['quantity'];
                                    $totalPanier += $totalLigne;
                                  echo $totalLigne?> €</td>
                        <td><a href="cart.php?del=<?php echo $k ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="4" align="right">Total</td>
                        <td><?php echo $totalPanier ?> €</td>
                        <td><a href="cart.php?cancel=1">Vider panier</a></td>
                    </tr>
            </table>
        <?php } ?>
    </body>
</html>