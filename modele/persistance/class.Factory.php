<?php

error_reporting(E_ALL);
require_once 'class.StagiaireDAO.php';


if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}


require_once('class.Connection.php');


class Factory
{
  
    private  $connection = null;

  
    public function __construct($url, $user, $password) {
        $this->connection = Connection::getInstance($url, $user, $password);
                
            
      
    }


    public function getAdresseDAO()
    {
        $returnValue = new AdresseDAO($this->connection);
        return $returnValue;
    }

  
    public function getStagiaireDAO()
    {
        $returnValue = new StagiaireDAO($this->connection);


        return $returnValue;
    }

    
    public function getStagiaireFormateurDAO()
    {
        $returnValue = new Stagiaire_formateurDAO($this->connection);
        return $returnValue;
    }

   
    public function gettypeFormationFormateurDAO()
    {
        $returnValue = new type_formation_formateurDAO($this->connection);

        return $returnValue;
    }

   
    public function getNationaliteDAO()
    {
        $returnValue = new NationaliteDAO($this->connection);

       

        return $returnValue;
    }

   
    public function getTypeFormationDAO()
    {
        $returnValue = new type_formationDAO($this->connection);

   

        return $returnValue;
    }

    /**
     * Short description of method getSalleDAO
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return SalleDAO
     */
    public function getSalleDAO()
    {
        $returnValue = new SalleDAO($this->connection);

        return $returnValue;
    }

} /* end of class Factory */

?>