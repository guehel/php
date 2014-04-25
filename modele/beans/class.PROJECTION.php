<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.PROJECTION.php
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
 * include BOBINE
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.BOBINE.php');

/**
 * include SALLE
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.SALLE.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000088C-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000088C-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000088C-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000088C-constants end

/**
 * Short description of class PROJECTION
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class PROJECTION
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_projection
     *
     * @access public
     * @var Integer
     */
    public $id_projection = null;

    /**
     * Short description of attribute date_sceance
     *
     * @access public
     * @var Integer
     */
    public $date_sceance = null;

    /**
     * Short description of attribute heure_sceance
     *
     * @access public
     * @var Integer
     */
    public $heure_sceance = null;

    /**
     * Short description of attribute id_cinema
     *
     * @access public
     * @var Integer
     */
    public $id_cinema = null;

    /**
     * Short description of attribute no_salle
     *
     * @access public
     * @var Integer
     */
    public $no_salle = null;

    /**
     * Short description of attribute id_bobine
     *
     * @access public
     * @var Integer
     */
    public $id_bobine = null;

    /**
     * Short description of attribute id_film
     *
     * @access public
     * @var Integer
     */
    public $id_film = null;

    // --- OPERATIONS ---

} /* end of class PROJECTION */

?>