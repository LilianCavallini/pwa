<?php
session_start(); 
//print_r ($_FILES);
$id_user = $_SESSION['user_id'];
 date_default_timezone_set('America/Sao_Paulo');
require_once 'init.php';
$PDO = db_connect();

$total = count($_FILES['upload2']['tmp_name']);
echo $total;
// Loop through each file
 

  //Get the temp file path
  $tmpFilePath = $_FILES['upload2']['tmp_name'];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "../uploadFiles/".$id_user."/" . $_FILES['upload2']['name'];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

      //Handle other code here

    
  }
}
 if ($tmpFilePath != ""){
 echo $_FILES['upload2']['name'];
 echo "<br>";
    $newFilePath = "../uploadFiles/".$id_user."/".$_FILES['upload2']['name'];
    $path = "../uploadFiles/".$id_user."/";
if(!is_dir($path)){
  mkdir($path);
}
$path_parts = pathinfo($newFilePath);
echo "dirname:".$path_parts['dirname']. "<br>";
echo "basename:".$path_parts['basename']. "<br>";
echo "extension: ".$path_parts['extension']. "<br>";
//echo "finelanme".$path_parts['filename'], "<br>"; // desde o PHP 5.2.0
if ($path_parts['extension']=="mp4"){
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {
   // $file = $_FILES['upload2']['name'];
     $file = $path.''.$_FILES['upload2']['name'];

                        $now = date("Y-m-d H:i:s");
                       $sql2= "INSERT INTO  cheilgt_files (titulo_files,  id_user) VALUES ('$file','$id_user' )";
                        $stmt = $PDO->prepare($sql2);
                        $stmt->bindParam(':titulo_files', $file);
                
                        $stmt->execute();
                        $sql3= "INSERT INTO  cheilgt_historico ( id_user, clickTAG, titulo_historico) VALUES ('$id_user', '$file','Adicionou video')";
                        $stmt3 = $PDO->prepare($sql3);
                        $stmt3->execute();
    } //caso o arquivo nao é permitido
      else {
        $file = $path.''.$_FILES['upload2']['name'];
                        unlink ($file);
                        rmdir($path);
                        echo '<script>alert("apague o arquivo - '.$file.' e tente novamente o upload");
                        //window.location.href = "../index.php?modulo=add_videos";
                        </script>'  ;  
     }
}  
   } else {
   echo '<script>alert("seu arquivo nao tem permissao para upload, volte e tente novamente");
             window.location.href = "../index.php?modulo=add_videos";
              </script>'  ;  
              
              }
   
  

echo '<script>alert("Arquivos adicionados com sucesso");
              window.location.href = "../index.php?modulo=meusvideos";
              </script>'  ;  
//header("location: ../index.php?modulo=lista_media");
exit
?>