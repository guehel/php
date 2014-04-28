<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vueAdresse
 *
 * @author Guehel
 */
class vueAdresse {
    private $contenue = '';
    public function validerAdresse($adresse){
        foreach($adresse as $add){
        $divConfirm = '<li>'.$add['rue'].' '.$add['numero'].' '.$add['rue'].'<input type="combo" name = "'.$add['idAdresse'].'"</li> ';
        }
    }
     public function afficherMessage($message){
        foreach($adresse as $add){
        $divConfirm = '<li>'.$add['rue'].' '.$add['numero'].' '.$add['rue'].'<input type="combo" name = "'.$add['idAdresse'].'"</li> ';
        }
    }
}
