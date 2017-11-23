<?php
class Panier{
    private $selection = array();
 
    private function __construct(){
        // Nothing
    }
 
    public static function getInstance(){
        if(empty($_SESSION['panier']) || !$_SESSION['panier'] instanceof Panier){
            $_SESSION['panier'] = new Panier();
        }
        return $_SESSION['panier'];
    }
 
    public function add($numEl){        // pour eviter confusion entre id produit et indice du tableau
        // recherche existence dans tableau $this->selection;
        $trouve = false;
        foreach($this->selection as $k => &$product)
        {
            if ($product['id'] == $GLOBALS['products'][$numEl]['id'])
            { // produit deja commande
            $product['quantity']++;
            $trouve = true;
            break;
            }
        } 
        if (!$trouve)
        {
        // Si le produit n'est pas commandé
            $produit = $GLOBALS['products'][$numEl];
            $produit['quantity'] = 1;        
            $this->selection[] = $produit;
        }
        
    }
     
    // fonction servant à supprimer un produit sélectionné
    public function delete($numEl)
        {
        unset($this->selection[$numEl]);
        }
         
    // fonction servant à nettoyer intégralement le panier
    public function clean()
        {
        // réinitialisation du panier
            $this->selection = array();
        }
     
    public function getSelection(){
        return $this->selection;
    }
}
?>