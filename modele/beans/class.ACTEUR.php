<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.ACTEUR.php
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
 * include AGENT
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.AGENT.php');

/**
 * include PERSONNE
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.PERSONNE.php');

/* user defined includes */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000087E-includes begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000087E-includes end

/* user defined constants */
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000087E-constants begin
// section -84-18-10-21--6b22bd78:145952428cc:-8000:000000000000087E-constants end

/**
 * Short description of class ACTEUR
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class ACTEUR
    extends PERSONNE
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_agent
     *
     * @access public
     * @var Integer
     */
    public $id_agent = null;

    // --- OPERATIONS ---

} /* end of class ACTEUR */

?>