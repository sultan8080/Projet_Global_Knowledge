<?php
class Produit {
// private $id;
private $libelle;
private $prix;

private $quantite;

public function __construct ($libelle, $prix, $quantite)
{
    $this->libelle = $libelle;
    $this->prix = $prix;
    $this->quantite = $quantite;
}

public function __toString(){
    return "Produit : libelle = ".$this->libelle. "Prix = ".$this->prix."Quantite : quantite = ".$this->quantite;
}

}

?>