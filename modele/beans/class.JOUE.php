<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.JOUE.php
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
 * include ACTEUR
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.ACTEUR.php');

/**
 * include FILM
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.FILM.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008C8-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008C8-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008C8-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008C8-constants end

/**
 * Short description of class JOUE
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class JOUE
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_personne
     *
     * @access public
     * @var Integer
     */
    public $id_personne = null;

    /**
     * Short description of attribute id_film
     *
     * @access public
     * @var Integer
     */
    public $id_film = null;

    /**
     * Short description of attribute role
     *
     * @access public
     * @var Integer
     */
    public $role = null;

    // --- OPERATIONS ---

} /* end of class JOUE */

?>