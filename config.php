<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbname = "root";
$dbpass = "";

try{
  $pdo = new PDO($dsn,$dbname,$dbpass);
}catch(PDOException $e){
   echo"Conexão Flahou: ".$e->getMessage();
}

?>
