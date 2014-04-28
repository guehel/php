<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Decorateur
 *
 * @author Guehel
 */
require_once '../Validateur.php';
abstract class Decorateur implements Validateur{
    protected  $validateur;
    public function __construct(Validateur $validateur) {
        $this->validateur = $validateur;
    }
     public function valider($tableau) {
       
        
        $tableau [] = $this->validateur->valide();
       
        return $tableau;
        
    }
    
}
