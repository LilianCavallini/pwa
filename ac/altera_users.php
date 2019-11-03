<?php
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$team = $_POST['team'];
$clientes = explode(",",$_POST['clientes']);
$PDO = db_connect();
$sql = "SELECT * FROM casescheil_clientes  order by date_cliente DESC";
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
<h5 class="card-header">Edit User</h5>
        <div class="card-body">
                <form method="post" class="checkbox-form" id="usersEdit">
                        <div class="form-group">
                                <label for="validationServer01">name*</label><div class="help" data-toggle="tooltip"  title="
                                <h4>Nome</h4>
                                É obrigatório inserir o nome completo do usuário" data-html="true"><i class="fa fa-question" ></i></div>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">      
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo $name;?>">
                        </div>
                        <div class="form-group">
                                <label for="validationServer01">Team*</label><div class="help" data-toggle="tooltip"  title="
                                <h4>Team</h4>
                                É obrigatório escolher um time para o usuário. " data-html="true"><i class="fa fa-question" ></i></div>
                                <select id="team" name="team" class="form-control">
                                <option value='1' <?php if($team=="1"){echo "selected";}?>>Cliente</option>
                                <option value='2' <?php if($team=="2"){echo "selected";}?>>Account</option>
                                <?php if ($_SESSION['team']==0 or $_SESSION['team']==3){?>
                                <option value='3' <?php if($team=="3"){echo "selected";}?>>Delivery</option>
                                <?php }?>
                                 <?php if ($_SESSION['team']==0){?>
                                <option value='0' <?php if($team=="0"){echo "selected";}?>>ADM</option>
                                <?php }?>
                                </select>
                        </div>      
                        <div class="form-group">
                                <label for="validationServer01">Clientes*</label>
                                <div class="help" data-toggle="tooltip"  title="
                                <h4>Clientes</h4>
                                Selecione um ou multiplos clientes que o usuário terá acesso. " data-html="true"><i class="fa fa-question" ></i></div>
                                <div style="clear:both;"></div>
                                <select multiple="multiple" id="permissions" name="clientes[]"  required>
                                <?php        foreach($cliente as $table){ ?>
                                <option value='<?php echo $table["id_cliente"]; ?>' <?php foreach ($clientes as $item) { if($item==$table["id_cliente"]){echo "selected";}}?>><?php echo $table["titulo_cliente"]; ?></option>
                                <?php }?>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btn_usersEdit">Go!</button>
                </form>
        </div>
</div>