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
class ValidationNom implements Validateur {
    private $nom ;
    public function __construct($nom) {
        $this->nom = $nom
        ;
    }
    public function valider($validateur) {
        if(strlen(trim($this->nom))<1){
        $validation['nom'] = false;
        }else{
             $validation['nom'] = true;
        }
        return $validation;
        
    }

//put your code here
}
