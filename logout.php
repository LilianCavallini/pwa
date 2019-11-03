<?php
session_start(); 
require_once '_class/init.php';
$PDO = db_connect();
//$titulo = isset($_POST['titulo_files']) ? $_POST['titulo_files'] : '';
//$titulo_historico = isset($_POST['titulo_historico']) ? $_POST['titulo_historico'] : '';
$id_user = $_SESSION['user_id'];
$clickTipo ='Logout';
$clickTAG = 'Não exise';
//echo '<script>alert("'.$clickTAG .'")</script>';
//se n'ao tem email executa a ação
$sql2= "INSERT INTO casescheil_historico ( id_user, clickTAG, titulo_historico) VALUES ('$id_user', '$clickTAG','$clickTipo')";
//echo(count($sql2));
$stmt = $PDO->prepare($sql2);
$stmt->bindParam(':titulo_historico', $clickTipo);
$stmt->bindParam(':id_user', $id_user);
$stmt->bindParam(':clickTAG', $clickTAG);
$stmt->execute();
// header("location: ../index.php?modulo=lista_portfolio");

  
// muda o valor de logged_in para false
$_SESSION['logged_in'] = false;
 
// finaliza a sessão
session_destroy();
 
// retorna para a index.php
echo '<script>window.location.replace("login.php");</script>';

?>