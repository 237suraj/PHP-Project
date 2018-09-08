<?php
$dbhost     = "localhost";
$dbname     = "ration";
$dbuser     = "root";
$dbpass     = "";
try {

  // $con = new PDO('sqlsrv:Server='.$dbhost.';Database='.$dbname,$dbuser,$dbpass,array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$con = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass,array(PDO::ATTR_EMULATE_PREPARES => false,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (Exception $e) {

    echo "EXCEPTION MESSAGE ".$e->getMessage();
}
?>
