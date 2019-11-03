<?php 
$time = $_SERVER['REQUEST_TIME'];

$timeout_duration = 1800;

if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
     $_SESSION['logged_in'] = false;
    session_unset();
    session_destroy();
    session_start();
  
    header('Location: logout.php');
    echo '<script>alert("Sua sessão expirou, por favor faça login novamente")</script>';

}
$_SESSION['LAST_ACTIVITY'] = $time;
?>