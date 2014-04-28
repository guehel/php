<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ValidationNom
 *
 * @author Guehel
 */

require_once '../Decorateur.php';
require_once '../concretDecorateur.php';
require_once 'validerNoCivic.php';
require_once '../../class.ADRESSE.php';
class ValidationNom extends Decorateur {
    public $nom ;
  
    public function validerNom() {
        if(strlen(trim($this->nom))<1){
        $validation['nom'] = 0;
        }else{
             $validation['nom'] = 1;
        }
        return $validation;
        
    }
    public function valider($tableau){
//        $validation = parent::valider();
        if($tableau==null){
            $tabl =darray(); 
       $tableau =  $this->validerNom();
        }else {
            
        }
    }
}
$adresse = new ADRESSE();
$adresse->setCode_postal("AAs");
$adresse->setProvince("QC");
$adresse->setNo_civic(25);
$validateur1 = new validerNoCivic($adresse);

print_r ($validateur1->valider());