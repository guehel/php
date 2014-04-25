<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.SALLE.php
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
 * include CINEMA
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.CINEMA.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000876-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000876-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000876-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000876-constants end

/**
 * Short description of class SALLE
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class SALLE
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute no_salle
     *
     * @access public
     * @var Integer
     */
    public $no_salle = null;

    /**
     * Short description of attribute nom
     *
     * @access public
     * @var Integer
     */
    public $nom = null;

    /**
     * Short description of attribute capacite
     *
     * @access public
     * @var Integer
     */
    public $capacite = null;

    /**
     * Short description of attribute id_cinema
     *
     * @access public
     * @var Integer
     */
    public $id_cinema = null;

    // --- OPERATIONS ---

} /* end of class SALLE */

?>