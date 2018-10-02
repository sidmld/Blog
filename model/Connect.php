<?php


class Connect
{

    protected function dbConnect(){
        $db = new PDO('mysql:host=localhost;dbname=tests','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
