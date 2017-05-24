<?php

class Connect
{

    public function conectar()
    {
        $db = new PDO('mysql:host=my-host;dbname=myDB;charset=utf8', 'myUser', 'myPass');
        return $db;
    }

}
