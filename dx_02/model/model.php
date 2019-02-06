<?php

class Model {

    private $params;
    private $tableName;

    public function __construct($data, $tableName){


        //ここの2つで$paramsと$tableNameにフォームから飛んで来た値が代入される
        //(privateで書いてある部分)
        //register.phpのnew Model()の()の中に書いたデータが
        // そのままparams,tableNameにそれぞれ代入される
        // そうすることで、store関数の中でparamsやtableNameの中のデータを実際に扱えるようにする

        $this->$params = $data;
        $this->tableName = $tableName;
        
    }

    public function store(){

        $cols = array_keys($this->params);
        $values = array_values($this->params);


        $sql ='INSERT INTO '.$this->tableName.' ('.$cols.') VALUES('.$values.')';
        
        $db = DB_DBNAME;
        $host = DB_HOSTNAME;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $conn = new PDO("mysql:dbname=$db;host=$host",$username,$password);
        $prepare = $conn -> prepare($sql);
        $result = $prepare->execute();

    }




}