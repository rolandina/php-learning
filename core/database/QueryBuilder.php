<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    
    public function selectAll($table){

        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

    //PDO::FETCH_OBJ
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert( $table, $parameters)
    {
        //insert into user (username, email, password) values (:username, :email, :password)
        
        $sql = sprintf(
            'insert into %s (%s) values (%s)', $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
            );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch( Exception $e){

            die('Whoops, something went wrong');
        }

    

        

    }





}