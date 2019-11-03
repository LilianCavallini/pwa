<?php
session_start(); 
 $id_user = $_SESSION['user_id'];
 $email = $_SESSION['user_name'];

require_once 'init.php';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$passwordHash = make_hash($password);
$PDO = db_connect();

//verifica se tem email cadastrado
//echo "<pre>".print_r($_POST)."</pre>";
$sql = "UPDATE casescheil_users SET  password ='".$passwordHash."'  WHERE id=".$id;
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':id', $id);
$stmt->bindParam(':password', $passwordHash);
  
$stmt->execute();
 
 $sql3= "INSERT INTO casescheil_historico ( id_user, clickTAG, titulo_historico) VALUES ('$id_user', '$email','Alterou Password')";
//echo(count($sql2));
$stmt3 = $PDO->prepare($sql3);
$stmt3->execute();
 
// pega o primeiro usuário
  
$tables = $stmt->fetchAll(PDO::FETCH_NUM);
exit
?>