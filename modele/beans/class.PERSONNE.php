<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.PERSONNE.php
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

/**
 * include ADRESSE
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ADRESSE.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000879-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000879-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000879-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000879-constants end

/**
 * Short description of class PERSONNE
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class PERSONNE
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_personne
     *
     * @access public
     * @var Integer
     */
    public $id_personne = null;

    /**
     * Short description of attribute nom
     *
     * @access public
     * @var Integer
     */
    public $nom = null;

    /**
     * Short description of attribute prenom
     *
     * @access public
     * @var Integer
     */
    public $prenom = null;

    /**
     * Short description of attribute id_adresse
     *
     * @access public
     * @var Integer
     */
    public $id_adresse = null;

    // --- OPERATIONS ---

} /* end of class PERSONNE */

?>