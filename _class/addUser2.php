<?php
session_start(); 
 $id_user = $_SESSION['user_id'];

require_once 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$clientes = isset($_POST['clientes']) ? implode(',',$_POST['clientes']) : '';
$team = isset($_POST['team']) ? $_POST['team'] : '';
$status = "ativo";
$PDO = db_connect();

//verifica se tem email cadastrado
//echo "<pre>".print_r($_POST)."</pre>";
$sql = "SELECT id, name FROM casescheil_users WHERE email ='".$email."'";
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':name', $name);

$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) > 0)
{
//echo(count($sql));
//echo "<pre>".print_r($users)."</pre>";

    echo "email já existe na base";
// document.location.href = ("formulario.html");
} else {
if ($name ==''){echo("Voce precisa escolher um nome");}
elseif ($email ==''){echo("Voce precisa escolher um email");}
elseif ($password ==''){echo("Voce precisa escolher um password");}
elseif ($team ==''){echo("Voce precisa escolher um team");}
elseif ($clientes ==''){echo("Voce precisa escolher um cliente");}
else{
//se n'ao tem email executa a ação
$passwordHash = make_hash($password);
$sql2= "INSERT INTO casescheil_users (name, email, password, clientes, team, status) VALUES ('$name', '$email', '$passwordHash','$clientes','$team','$status')";
//echo(count($sql2));
$stmt = $PDO->prepare($sql2);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':clientes', $clientes);
$stmt->bindParam(':team', $team);
$stmt->bindParam(':status', $status);
$stmt->execute();

//colocando no historico
$sql3= "INSERT INTO casescheil_historico ( id_user, clickTAG, titulo_historico) VALUES ('$id_user', '$name','Adicionou novo usuário')";
//echo(count($sql2));
$stmt3 = $PDO->prepare($sql3);
$stmt3->execute();
//exit
//  echo '<script>window.location.replace("../index.php?modulo=lista_users");</script>';
//header('Location:../index.php?modulo=lista_users');
//exit
}}


//exit
 


?>