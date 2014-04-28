<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of concretDecorateur
 *
 * @author Guehel
 */
require_once '../Decorateur.php';
class concretDecorateur extends Decorateur{
    public function valider($tableau) {
       
        
        $tableau[] = $this->validateur->valide();
       
        return $tableau;
        
    }

//put your code here
}
