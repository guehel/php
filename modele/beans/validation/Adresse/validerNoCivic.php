<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validerAdresse
 *
 * @author Guehel
 */
require_once '../concretDecorateur.php';
class validerNoCivic extends concretDecorateur{
     public function validerNoCivic(){
         $var = $this->validateur->getNo_civic();
         if($var==null||$var<0){
            return array(
                'nom'=>0
            ); 
         }else{
              return array(
                'nom'=>0
            ); 
         }
     }
    public function valider($tableau) {
      
        $tableau[] = $this->validateur->validerNoCivic();
        parent::valider($tableau);
        return $tableau;
        
    }

//put your code here
}
