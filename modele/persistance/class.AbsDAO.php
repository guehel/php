<?php

abstract  class AbsDAO{
    protected $connection = null;
    protected  $bdName = "projetfinal";
    public function __construct( Connection $connextion)
    {
        $this->connection = $connextion;
    }
    
    protected function execute_request($sql){
         $returnValue = $this->connection->executer_request($sql, $this->bdName);
         return $returnValue;
    }
    
    public abstract function find($object);
    public abstract function insert($object);
    public abstract function delete($object);
    public abstract function update($object);
    
}


?>
