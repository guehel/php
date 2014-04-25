<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.CINEMA.php
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
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000877-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000877-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000877-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000877-constants end

/**
 * Short description of class CINEMA
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class CINEMA
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_cinema
     *
     * @access public
     * @var Integer
     */
    public $id_cinema = null;

    /**
     * Short description of attribute nom
     *
     * @access public
     * @var Integer
     */
    public $nom = null;

    /**
     * Short description of attribute id_adresse
     *
     * @access public
     * @var Integer
     */
    public $id_adresse = null;

    /**
     * Short description of attribute id_adresse
     *
     * @access public
     * @var Integer
     */
    public $id_adresse = null;

    // --- OPERATIONS ---

} /* end of class CINEMA */

?>