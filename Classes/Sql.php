<?php
 class Sql extends PDO{
     private $conn;
     
     public function __construct(){
         $this->conn= new PDO("mysql:dbname=dbphp7;host=localhost","root","");
         echo"Conexão feita com sucesso";
         
     }
   


?>