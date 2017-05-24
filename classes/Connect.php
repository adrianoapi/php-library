<?php

class Connect
{

    public function conectar()
    {
        $db = new PDO('mysql:host=my-host;dbname=myDB;charset=utf8', 'myUser', 'myPass');
        return $db;
    }

    public function mongoDB()
    {
        $db = new Mongo("mongodb://94.23.54.103:27017,188.165.219.99:27017,94.23.220.151:27017", array("replicaSet" => "cluster"));
    }

}
