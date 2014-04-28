<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author Guehel
 */
require_once '../beans/class.ADRESSE.php';

class AdresseTraitement {

    private $vueAdresse = "../../vue/adresse/frameAdresse.php";
    private $provinces = './provinces.php';
    private $adresse=NULL;
    private $bdAdresse=NULL;
    private $message = "";

    public function __contruct() {
        $factory = new Factory($url, $user, $password);
        $this->bdAdresse = $factory->getAdresseDAO();
        $this->adresse = new ADRESSE();
    }

//

    public function contruirePage() {
        session_start();
        $this->lireSaisie();
        $adresse = $this->adresse;
        $message = "test message";
        $sujet = "test";
        include $this->provinces;
        include $this->vueAdresse;
    }

    public function traiterPosteAdresse() {

        $this->lireSaisie();
        $_SESSION['adresse'] = $this->adresse;
        if (true) {
            $adresse = $this->adresse;
            $adresseTrouvee = $this->bdAdresse->find($adresse);
            if (!$adresseTrouvee) {
                $retour = $this->bdAdresse->save($this->adresse);
                if ($retour != null) {
                    $_SESSION['adresse'] = $retour;
                    $message = "Enregistrement reussie";
                } else {
                    $message = "Echec de l'enregistrement";
                }
            } else {
                $_SESSION['adresse'] = $adresseTrouvee;
                $message = "L'adresse suivante existe dejat";
            }
        } else {
            $erreurs = $this->adresse->getErreurs();
        }
        $this->contruirePage();
    }

    public function traiterModifierAdresse() {

        $this->lireSaisie();
        $_SESSION['adresse'] = $this->adresse;
        if ($this->adresse->valide()) {
            $adresseTrouvee = $this->bdAdresse->find($this->adresse);
            if ($adresseTrouvee) {
                $retour = $this->bdAdresse->update($this->adresse);
                if ($retour != null) {
                    $_SESSION['adresse'] = $retour;
                    $message = "modification reussie";
                } else {
                    $message = "Echec de la modification";
                }
            } else {

                $message = "L'adresse suivante fournie n'existe pas";
            }
        } else {
            $erreurs = $this->adresse->getErreurs();
        }
        $this->contruirePage();
    }

    public function setbdAdresse($bdAdresse) {
        $this->bdAdresse = $bdAdresse;
    }

    public function lireSaisie() {
        if (empty($_GET)) {
            $no_civic = 0;

            $rue = "";
            $ville = "";
            $code_postal = "";
            $province = "";
        } else {
            $no_civic = htmlspecialchars($_GET['no_civic']);

            $rue = htmlspecialchars($_GET['no_civic']);
            $ville = htmlspecialchars($_GET['no_civic']);
            $code_postal = htmlspecialchars($_GET['no_civic']);
            $province = htmlspecialchars($_GET['no_civic']);
        }
        $this->adresse = new ADRESSE();
        $this->adresse->setNo_civic($no_civic);
        $this->adresse->setCode_postal($code_postal);
        $this->adresse->setVille($ville);
        $this->adresse->setProvince($province);
        $this->adresse->setRue($rue);
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getVueAdresse() {
        return $this->vueAdresse;
    }

    public function posterAdresse() {
        $this->creerVueAdresse();
    }

    private function creerVueAdresse() {
        
    }

}

include "bd.php";
$add = new AdresseTraitement();


if (empty($_GET)) {
    $add->contruirePage();
} else {
    $add->traiterPosteAdresse();
}