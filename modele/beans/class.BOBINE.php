<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.BOBINE.php
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
 * include FILM
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.FILM.php');

/**
 * include LANGUE
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('unknown.LANGUE.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000899-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000899-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000899-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:0000000000000899-constants end

/**
 * Short description of class BOBINE
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class BOBINE
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_bobine
     *
     * @access public
     * @var Integer
     */
    public $id_bobine = null;

    /**
     * Short description of attribute Libelle
     *
     * @access public
     * @var Integer
     */
    public $Libelle = null;

    /**
     * Short description of attribute duree
     *
     * @access public
     * @var Integer
     */
    public $duree = null;

    /**
     * Short description of attribute id_film
     *
     * @access public
     * @var Integer
     */
    public $id_film = null;

    /**
     * Short description of attribute id_langue
     *
     * @access public
     * @var Integer
     */
    public $id_langue = null;

    // --- OPERATIONS ---

} /* end of class BOBINE */

?>