<?php
session_start(); 
require_once 'init.php';
$PDO = db_connect();
//$titulo = isset($_POST['titulo_files']) ? $_POST['titulo_files'] : '';
//$titulo_historico = isset($_POST['titulo_historico']) ? $_POST['titulo_historico'] : '';
$id_user = $_SESSION['user_id'];
$clickTipo = isset($_GET['clickTipo']) ? $_GET['clickTipo'] : '';
$clickTAG = isset($_GET['clickTAG']) ? $_GET['clickTAG'] : '';
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
exit
?>