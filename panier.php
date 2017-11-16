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
print_r($selection);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <h2>Contenu du Panier :</h2>
        <?php if(count($selection) == 0){ ?>
            <strong>Panier vide</strong>
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
                        <td><a href="index.php?del=<?php echo $k ?>">Supprimer</a></td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="4" align="right">Total</td>
                        <td><?php echo $totalPanier ?> €</td>
                        <td><a href="index.php?cancel=1">Vider panier</a></td>
                    </tr>
            </table>
        <?php } ?>
        <h2>Liste products :</h2>
        <table cellpadding="5" cellspacing="0" border="1">
            <?php foreach($GLOBALS['products'] as $k => &$product){ ?>
                <tr>
                    <td><?php echo $product['id']?></td>
                    <td><?php echo $product['designation']?></td>
                    <td><?php echo $product['price']?>€</td>
                    <td><a href="panier.php.php?add=<?php echo $k ?>">Ajouter</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>