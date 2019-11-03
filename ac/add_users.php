 <?php
$PDO = db_connect();

$sql = "SELECT * FROM casescheil_clientes WHERE status='ativo' order by date_cliente DESC";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id_cliente', $id_cliente);
$stmt->bindParam(':titulo_cliente', $titulo_cliente);
$stmt->bindParam(':cliente_cliente', $cliente_cliente);
$stmt->bindParam(':date_cliente', $date_cliente);
$stmt->bindParam(':date_inicio', $date_inicio);
$stmt->bindParam(':date_fim', $date_fim);
$stmt->execute();
$cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
        
        <div class="card">
        <h5 class="card-header">Add User</h5>
       
    <div class="card-body">
        <form method="post" class="checkbox-form" id="users">
                <div class="form-group">
                    <label for="validationServer01">name*</label><div class="help" data-toggle="tooltip"  title="
<h4>Nome</h4>
É obrigatório inserir o nome completo do usuário" data-html="true"><i class="fa fa-question" ></i></div>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" >
                 
                </div>
                <div class="form-group">
                    <label for="validationServer01">email*</label><div class="help" data-toggle="tooltip"  title="
<h4>Email</h4>
É obrigatório preencher o endereço de e-mail do usuário. <br><br> Este e-mail será utilizado no login" data-html="true"><i class="fa fa-question" ></i></div>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email" >
                    <input type="hidden" class="form-control" id="status" name="status" value="ativo" >
                </div>
                <div class="form-group">
                    <label for="validationServer01">password*</label><div class="help" data-toggle="tooltip"  title="
<h4>Password</h4>
É obrigatório escolher uma senha para o usuário. " data-html="true"><i class="fa fa-question" ></i></div>
                    <input type="password" class="form-control" id="nome" placeholder="password" name="password" >
                      </div>
                <div class="form-group">
                     <label for="validationServer01">Team*</label><div class="help" data-toggle="tooltip"  title="
<h4>Team</h4>
É obrigatório escolher um time para o usuário. " data-html="true"><i class="fa fa-question" ></i></div>
                       <select id="team" name="team" class="form-control" required>
                       <?php  
                         if ($_SESSION['team']==0 ){
                           echo "<option value='0'>ADM</option>";
                        echo "<option value='2'>Account</option>";
                          echo "<option value='3'>Delivery</option>";
                             echo "<option value='1'>Cliente</option>";
                       } 
                       if ($_SESSION['team']==2 ){
                        echo "<option value='2'>Account</option>";
                         echo "<option value='1'>Cliente</option>";
                       } elseif ($_SESSION['team']==3) {
                        echo "<option value='2'>Account</option>";
                         echo "<option value='1'>Cliente</option>";
                        echo "<option value='3'>Delivery</option>";
                        //echo " <option value='1'>Client</option>";
                       }  
                    
                       ?>
                                       
                        </select>
                   </div>      
                                <div class="form-group">
                                <label for="validationServer01">Clientes*</label>
                                <div class="help" data-toggle="tooltip"  title="
<h4>Clientes</h4>
Selecione um ou multiplos clientes que o usuário terá acesso. " data-html="true"><i class="fa fa-question" ></i></div>
<div style="clear:both;"></div>
                                    <select multiple="multiple" id="permissions" name="clientes[]" >
                                      <?php        foreach($cliente as $table){ ?>
                                          <option value='<?php echo $table["id_cliente"]; ?>'><?php echo $table["titulo_cliente"]; ?></option>
                                     <?php }?>
                                    </select>
                        </div>
                    <button type="submit" class="btn btn-primary" id="btn_users">Go!</button>
                </form>
                </div>
        </div>
