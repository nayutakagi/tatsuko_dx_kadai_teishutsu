<?php

require 'config/env.php';

function db(){
        $db = DB_DBNAME;
        $host = DB_HOSTNAME;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $conn = new PDO("mysql:dbname=$db;host=$host",$username,$password);
}

?>