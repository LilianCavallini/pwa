<?php
session_start(); 
 $id_user = $_SESSION['user_id'];

require_once 'init.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nome = isset($_POST['name']) ? $_POST['name'] : '';
$PDO = db_connect();

$sql2= "DELETE from casescheil_users WHERE id='".$id."'";
$stmt = $PDO->prepare($sql2);
$stmt->bindParam(':id_cliente', $id_cliente);
//$stmt->bindParam(':cliente_files', $cliente);
$stmt->execute();

$id_user = $_SESSION['user_id'];
$sql3= "INSERT INTO casescheil_historico ( id_user, clickTAG, titulo_historico) VALUES ('$id_user', '$nome','Apagou o usuário')";
//echo(count($sql2));
$stmt3 = $PDO->prepare($sql3);
$stmt3->execute();

 exit
  //echo "<script>alert('aqui')</script>";
?>

 

