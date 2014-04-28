<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.SalleDAO.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 13.04.2014, 16:54:27 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Salle
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('../beans/class.ADRESSE.php');
require_once('class.AbsDAO.php');
/* user defined includes */
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000092A-includes begin
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000092A-includes end

/* user defined constants */
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000092A-constants begin
// section -64--88--125-1--4f423341:1455c8c5644:-8000:000000000000092A-constants end

/**
 * Short description of class SalleDAO
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class AdresseDAO extends AbsDAO
{
   
    public $connection = null;

    
    public function find(ADRESSE $adresse)
    {
       $sql = "SELECT `id_adresse`, `no_civic`, `rue`, `ville`, `code_postal` FROM `adresse`"
               . " WHERE id_adresse`=\'"
                .$adresse->getId_adresse()."\' or"
               . ", `no_civic`=\'"
                .$adresse->getNo_civic()."\', `rue`= \'"
                .$adresse->getRue()."\', `ville`=\'"
                .$adresse->getVille()."\', `code_postal`=\'"
                .$adresse->getCode_postal()."\') ";
                

        return  $this->execute_request($sql);
    }

    /**
     * Short description of method insert
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  salle Salle
     * @return boolean
     */
    public function insert(ADRESSE $adresse)
    {
         $sql = "INSERT INTO `projetfinal`.`adresse` (`id_adresse`, `no_civic`, `rue`, `ville`, `code_postal`) "
                
                . "VALUES (NULL, \'"
                .$adresse->getNo_civic()."\', \'"
                .$adresse->getRue()."\', \'"
                .$adresse->getVille()."\', \'"
                .$adresse->getCode_postal()."\');";
       return  $this->execute_request($sql);

    }

    /**
     * Short description of method delete
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  salle Salle
     * @return boolean
     */
    public function delete(ADRESSE $adresse)
    {
        $returnValue = (bool) false;

        // section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000932 begin
        // section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000932 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method update
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  salle salle
     * @return boolean
     */
    public function update( ADRESSE $adresse)
    {
        $returnValue = (bool) false;

        // section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000935 begin
        // section -64--88--125-1--4f423341:1455c8c5644:-8000:0000000000000935 end

        return (bool) $returnValue;
    }

  
} /* end of class SalleDAO */

?>