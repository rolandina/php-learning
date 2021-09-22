<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    
    function selectAll($table){

        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

    //PDO::FETCH_OBJ
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


}