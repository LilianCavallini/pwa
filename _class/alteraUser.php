<?php
session_start(); 
 $id_user = $_SESSION['user_id'];

require_once 'init.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$team = isset($_POST['team']) ? $_POST['team'] : '';
$clientes = isset($_POST['clientes']) ? implode(",",$_POST['clientes']) : '';
//  $_SESSION['clientes']=$clientes;
//echo $clientes;
$PDO = db_connect();

//verifica se tem email cadastrado
//echo "<pre>".print_r($_POST)."</pre>";
$sql = "UPDATE casescheil_users SET name ='".$name."', team ='".$team."', clientes ='".$clientes."'  WHERE id=".$id;
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
  
$stmt->execute();
 $sql3= "INSERT INTO casescheil_historico ( id_user, clickTAG, titulo_historico) VALUES ('$id_user', '$name','Editou o usuário')";
//echo(count($sql2));
$stmt3 = $PDO->prepare($sql3);
$stmt3->execute();
 
 
// pega o primeiro usuário
  
$tables = $stmt->fetchAll(PDO::FETCH_NUM);
exit
?>