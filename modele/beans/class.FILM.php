<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.FILM.php
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
 * include REALISATEUR
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.REALISATEUR.php');

/**
 * include GENRE
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('unknown.GENRE.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008AE-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008AE-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008AE-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:00000000000008AE-constants end

/**
 * Short description of class FILM
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class FILM
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_film
     *
     * @access public
     * @var Integer
     */
    public $id_film = null;

    /**
     * Short description of attribute titre
     *
     * @access public
     * @var Integer
     */
    public $titre = null;

    /**
     * Short description of attribute annee
     *
     * @access public
     * @var Integer
     */
    public $annee = null;

    /**
     * Short description of attribute id_personne
     *
     * @access public
     * @var Integer
     */
    public $id_personne = null;

    /**
     * Short description of attribute id_genre
     *
     * @access public
     * @var Integer
     */
    public $id_genre = null;

    // --- OPERATIONS ---

} /* end of class FILM */

?>