<?php

class ConnectionCreator
{
  public static  function createConnection():PDO {
      
     return new PDO('sqlite:../Base.sqlite');
   }
   public static function createTableNumbers() {
       $db=ConnectionCreator::createConnection();
       $sql = 'CREATE TABLE IF NOT EXISTS numbers(id INT,extenso TEXT)';
       var_dump($db->query($sql));
   }
   public static function createDataBase() {
       $db=ConnectionCreator::createConnection();
       $sql="CREATE DATABASE myDB";
       if (var_dump($db->query($sql))){
           ConnectionCreator::createTableNumbers();
       }
   }
}
var_dump(ConnectionCreator::createConnection());



