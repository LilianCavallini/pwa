<?php
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

require 'init.php';
 
// resgata variáveis do formulário
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($email) || empty($password))
{
      echo "<script>alert('Preencha corretamente e-mail e senha');</script>";
     echo '<script>window.location.replace("../login.php");</script>';
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($password);
 
$PDO = db_connect();
 
$sql = "SELECT * FROM cheilgt_users WHERE email = :email AND password = :passwordHash and status='ativo'";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':passwordHash', $passwordHash);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0)
{
 
$sql3= "INSERT INTO cheilgt_historico ( id_user, clickTAG, titulo_historico) VALUES ('usuario desconhecido', 'não afetou arquivos','Login incorreto')";
//echo(count($sql2));
$stmt3 = $PDO->prepare($sql3);
$stmt3->execute();
      echo "<script>alert('E-mail ou senha incorretos');</script>";
     echo '<script>window.location.replace("../login.php");</script>';

//header('Location:../login.php');
  //  print_r($_POST);
   // echo ($passwordHash);
    exit;
} 
else {
session_start();
$user = $users[0];
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
$_SESSION['team'] = $user['team'];
$_SESSION['clientes'] = $user['clientes'];
// pega o primeiro usuário
$usuariofinal = $_SESSION['user_id'];
$sql4= "INSERT INTO cheilgt_historico (id_user, clickTAG, titulo_historico) VALUES ('$usuariofinal', 'não afetou arquivos', 'Entrou no sistema')";
//echo(count($sql2));
$stmt4 = $PDO->prepare($sql4);
$stmt4->execute();

 if ($_SESSION['team']==1){
header('Location:../index.php?modulo=lista_portfolio');
} else {
header('Location:../index.php?modulo=lista_portfolio');
}
}