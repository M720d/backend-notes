<?php

namespace Core;
use PDO;

class Database {

    public $connection ;
    public $statement;

    public function __construct($config, $username = 'root', $password = ''){

        $dsn = ('mysql:'.http_build_query($config, '',';'));

        // $dsn = "mysql:host={$config['host']}; port={$config['port']}; dbname={$config['dbname']}; charset={$config['charset']}";
        $this->connection = new PDO($dsn, 'root', '',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function myquery($query, $params=[]){
        // $dsn = "mysql:host=localhost; port=3306; dbname=myapp; charset=utf8mb4";

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        
        return $this;
    }

    public function get(){
        return $this->statement->fetchAll();
    }
    public function find(){
        return $this->statement->fetchAll();
    }

    public function FindOrFail(){
        $result = $this->find();

        if(! $result){
            abort();
        }

        return $result;
    }
}
