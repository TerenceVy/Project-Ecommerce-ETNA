<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/styles/style.css" type="text/css">
    <title>Figurines Pop</title>
  </head>
  <body>
<img src="../assets/images/Bande.png">
    <img src="../assets/images/Bande.png" class="bande2">
        <img src="../assets/images/secured.png" class="secured">
    <img src="../assets/images/cb.png" class="cb">
    <form action="../index.php">
      <input class="image" type="image" src="../assets/images/accueilbutton.png" value="accueil">
    </form>
    <div class="etna"> ETNA MANGA </div>
<img src="../assets/images/shinoa.png" class="shinoa">
    <div class="fig2">
      Figurine Shinoa à 14.99$  
    </div>

<img src="../assets/images/L.png" class="L">
      <div class="fig3">
      Figurine L 14.99$
    </div>
<img src="../assets/images/PopMyhero.png" class="allmight">

    <div class="fig1">
      Figurine All Might à SEULEMENT 12.99$
    </div>

    <form action="detailpop.php">
      <div class="achatpop">
	<input type="submit" value="  View Details   ">
      </div>
    </form>
    <div class="achatpop2">
      <input type="submit" value="  View Details  ">
    </div>
    <div class="achatpop3">
      <input type="submit" value="  View Details   ">
    </div>
    <div class="cb"></div>
    <div class="secured"></div>
    <a href="contact.php" target="_blank">Contact us</a>

    <?php require('Panier.class.php'); 
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
    <table cellpadding="5" cellspacing="0" border="1">
            <?php foreach($GLOBALS['products'] as $k => &$product){ ?>
                <tr>
                    <td><?php echo $product['id']?></td>
                    <td><?php echo $product['designation']?></td>
                    <td><?php echo $product['price']?>€</td>
                    <td><a href="panier.php?add=<?php echo $k ?>">Ajouter</a></td>
                </tr>
                <?php } ?>
  </body>
</html>