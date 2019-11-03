<?php
 
// inclui o arquivo de inicialização
require 'init.php';

$PDO = db_connect();
 
$sql = "SELECT id, name FROM cheilgt_users WHERE email = :email AND password = :password";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
 
$stmt->execute();
 
 
 
// pega o primeiro usuário
  
$tables = $stmt->fetchAll(PDO::FETCH_NUM);
 
//Loop through our table names.
foreach($tables as $table){
    //Print the table name out onto the page.
    echo $table[0], '<br>';
     echo $table[1], '<br>';
      echo $table[2], '<br>';
       echo $table[3], '<br>';
}
 
 
 
 ?>