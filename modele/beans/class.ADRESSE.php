<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.ADRESSE.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 24.04.2014, 15:44:39 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000878-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000878-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000878-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000878-constants end

/**
 * Short description of class ADRESSE
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ADRESSE
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_adresse
     *
     * @access public
     * @var Integer
     */
    private $id_adresse = null;

    /**
     * Short description of attribute no_civic
     *
     * @access private
     * @var Integer
     */
    private $no_civic = null;

    /**
     * Short description of attribute rue
     *
     * @access private
     * @var Integer
     */
    private $rue = null;

    /**
     * Short description of attribute ville
     *
     * @access private
     * @var String
     */
    private $ville = null;
    private $province = null;

    /**
     * @access private
     * @var String
     */
    public $code_postal = null;
    
    public function getId_adresse() {
        return $this->id_adresse;
    }

    public function getNo_civic() {
        return $this->no_civic;
    }

    public function getRue() {
        return $this->rue;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getProvince() {
        return $this->province;
    }

    public function getCode_postal() {
        return $this->code_postal;
    }

    public function setId_adresse( $id_adresse) {
        $this->id_adresse = $id_adresse;
    }

    public function setNo_civic( $no_civic) {
        $this->no_civic = $no_civic;
    }

    public function setRue( $rue) {
        $this->rue = $rue;
    }

    public function setVille( $ville) {
        $this->ville = $ville;
    }

    public function setProvince($province) {
        $this->province = $province;
    }

    public function setCode_postal( $code_postal) {
        $this->code_postal = $code_postal;
    }

    
    // --- OPERATIONS ---
    public function toArray(){
        $adresse_tableau = array(
            "id_adresse"=>$this->id_adresse,
            "no_civic" => $this->no_civic,
            "rue" => $this->rue,
            "ville" => $this->ville,
            "code_postal" => $this->code_postal,
            "province" =>$this->province
        );
       return  $adresse_tableau; 
    }

    public function valider($tableau) {
       return true; 
    }

} /* end of class ADRESSE */

?>