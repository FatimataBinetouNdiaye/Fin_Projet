<?php
include("indexac.php");
include("Connection.php");
$dbhost = 'localhost';
$dbname = 'allocation_chambre';
$dbuser = 'root';
$dbpswd = '';
try{
    $connect = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpswd );
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
   
}catch (PDOException $e){
    die("Une erreur est survenue lors de la connexion à la Base de données !");
}
