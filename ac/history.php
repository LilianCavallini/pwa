   <?php

// inclui o arquivo de inicialização
//require '_class/init.php';

$PDO = db_connect();
$sql = "SELECT * FROM  cheilgt_campanha where cliente_campanha in (".$_SESSION['clientes'].") order by date_inicio DESC";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id_campanha', $id_campanha);
$stmt->bindParam(':titulo_campanha', $titulo_campanha);
$stmt->bindParam(':cliente_campanha', $cliente_campanha);
$stmt->bindParam(':date_campanha', $date_campanha);
$stmt->bindParam(':date_inicio', $date_inicio);
$stmt->bindParam(':date_fim', $date_fim);
$stmt->execute();
$tables = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
$sql2 = "SELECT * FROM  cheilgt_clientes order by date_cliente DESC";
$stmt2 = $PDO->prepare($sql2);
$stmt2->bindParam(':id_cliente', $id_cliente);
$stmt2->bindParam(':titulo_cliente', $titulo_cliente);
$stmt2->bindParam(':date_cliente', $date_cliente);
$stmt2->execute();
$cliente = $stmt2->fetchAll(PDO::FETCH_ASSOC);
 //media
$sql3 = "SELECT * FROM  cheilgt_files order by id_files ASC";
$stmt3 = $PDO->prepare($sql3);
$stmt3->bindParam(':id_files', $id_files);
$stmt3->bindParam(':titulo_files', $titulo_files);
$stmt3->bindParam(':id_seg', $id_seg);
$stmt3->bindParam(':id_campanha', $id_campanha);
$stmt3->bindParam(':id_fase', $id_fase);
$stmt3->execute();  
$files = $stmt3->fetchAll(PDO::FETCH_ASSOC);
//fases
$sql4 = "SELECT id_fase,titulo_fase FROM  cheilgt_fases order by id_fase ASC";
$stmt4 = $PDO->prepare($sql4);
$stmt4->bindParam(':id_fase', $id_fase);
$stmt4->bindParam(':titulo_fase', $titulo_fase);
$stmt4->execute();  
$fase = $stmt4->fetchAll(PDO::FETCH_ASSOC);
//segmento
$sql5 = "SELECT id_seg,titulo_seg, id_campanha FROM  cheilgt_segmento order by id_seg ASC";
$stmt5 = $PDO->prepare($sql5);
$stmt5->bindParam(':id_seg', $id_seg);
$stmt5->bindParam(':titulo_seg', $titulo_seg);
$stmt5->execute();  
$seg = $stmt5->fetchAll(PDO::FETCH_ASSOC);
  //usuarios
$sql6 = "SELECT id,name FROM  cheilgt_users";
$stmt6 = $PDO->prepare($sql6);
$stmt6->bindParam(':id', $id);
$stmt6->bindParam(':name', $name);
$stmt6->execute();  
$usersi = $stmt6->fetchAll(PDO::FETCH_ASSOC);
 
  //historico
$sql7 = "SELECT * FROM  cheilgt_historico";
$stmt7 = $PDO->prepare($sql7);
$stmt7->bindParam(':id', $id);
$stmt7->bindParam(':name', $name);
$stmt7->execute();  
$historico = $stmt7->fetchAll(PDO::FETCH_ASSOC);
 
 
 ?>
 
  <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Histórico</h5>
                                <p></p>
                            </div>
 <div class="card-body">
  <div class="table-responsive">
                                    <table class="table table-striped table-bordered first" id="teste">
                                        <thead>
                                            <tr>
                                                <th>ID historico</th>
                                                 <th>Date</th>
                                                 <th>Usuário</th>
                                                 <th>Ação</th>
                                                <th>Dados</th>
                                               
                                                  </tr>
                                        </thead>
                                        <tbody>
                                <?php   foreach($historico as $historicos){ ?>
                                <tr>
                                                <td data-title="ID"><?php echo $historicos["id_historico"]; ?></td>
                                                 <td nowrap  data-title="Data"><?php  echo date(("d/m/Y H:i:s"), strtotime($historicos["date_historico"])); ?> </td> 
                                                   <td   data-title="Cheiler" nowrap><?php 
                                                    foreach($usersi as $usersis){ 
                                                       if ($historicos["id_user"]==$usersis["id"]){
                                                        echo $usersis["name"]; 
                                                    }}
                                                 ?>
                                                 </td>
                                                <td  data-title="Ação"><?php echo $historicos["titulo_historico"]; ?></td>
                                                <td>
                                               <?php 
                                               if ($historicos["titulo_historico"]=="Apagou o cliente"){
                                                 foreach($cliente as $clientess){ 
                                               if ($clientess["id_cliente"]==$historicos["clickTAG"]){
                                               echo $filess["titulo_cliente"] ;
                                               }}
                                               }
                                               $nrfil = 0;
                                                    foreach($files as $filess){ 
                                                        if ($filess["id_files"]==$historicos["clickTAG"]){
                                                            $nrfil++;
                                                            echo $filess["titulo_files"] ;
                                                        }
                                                    }  
                                                   if ($nrfil==0){
                                                    echo $historicos["clickTAG"];
                                                }
                                                 ?>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                    <th>ID historico</th>
                                                    <th>Date</th>
                                                    <th>Usuário</th>
                                                    <th>Ação</th>
                                                    <th>Peça afetada</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                </div>
                                </div>