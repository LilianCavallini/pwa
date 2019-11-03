   <?php

// inclui o arquivo de inicialização
require '_class/check.php';

$PDO = db_connect();
//
$sql = "SELECT id, email, password,name, date_user, team, clientes,status FROM cheilgt_users WHERE email != 'adm' order by status ASC";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':date_user', $date);
$stmt->bindParam(':clientes', $clientes);
$stmt->bindParam(':status', $status);
$stmt->execute();
$tables = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 ?>
 <?php //print_r($_SESSION['clientes']);?>
  <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Cheiler list</h5>
                                <a href="#" class="btn btn-success bt_form enable right">Adicionar Cheiler</a>
                            </div>
 <div class="card-body">
  <div class="table-responsive">
<table class="table table-striped table-bordered first teste2" id="Tableuser">
<thead>
<tr>
<th >STATUS</th>
<th>Team</th>
<th>Nome</th>
<th>E-mail</th>
<th>Start date</th>
<th>Settings</th>

</tr>
</thead>
<tbody>
<?php        foreach($tables as $table){ ?>
<tr>
<td data-title="Status"><form method="post"  id="form<?php echo $table['id']?>" style="
    position: absolute;
    left: 20%;
">
            <input type="hidden" name="id" value="<?php echo $table["id"]?>">
            <input type="hidden" name="name" value="<?php echo $table["name"]?>">
            <?php 
            if ($table["status"]=="desativo"){
            echo ' <input type="hidden" name="status" value="ativo" id="status">
            <button class="btn btn-dark bt_form enable" id="btn" data-toggle="tooltip" title="Ativar Usuário<br><br>Se clicar nesta opção, vc permite que o usuário opere este sistema de acordo com as permissões consedidas do time dele " data-html="true"><i class="fa fa-lock" id="iconStatus"></i></button> ';
            } else {
            echo ' <input type="hidden" name="status" value="desativo">
            <button class="btn btn-success bt_form enable" id="btn"><i class="fa fa-lock-open"  id="iconStatus"></i></button> ';
            }
            ?>     
</form></td>
<td data-title="Equipe"><?php echo $table["team"]?></td>
<td data-title="Nome"><?php echo $table["name"]?></td>
<td data-title="E-mail"><?php echo $table["email"]?></td>
<td data-title="Data"><?php echo date("d/m/Y | H:i:s",strtotime($table["date_user"]));?></td>
<td data-title="" id="iconemobiletable"> 
        <form method="post"  id="form2<?php echo $table['id']?>" action="index.php?modulo=altera_users" style="float:left;">
                <input type="hidden" name="id" value="<?php echo $table["id"]?>">
                <input type="hidden" name="name" value="<?php echo $table["name"]?>">
                <input type="hidden" name="password" value="<?php echo $table["password"]?>">
                <input type="hidden" name="email" value="<?php echo $table["email"]?>">
                <input type="hidden" name="team" value="<?php echo $table["team"]?>">
                <input type="hidden" name="clientes" value="<?php echo $table["clientes"]?>">
                <button class="btn btn-primary bt_form" id="btn2"><i class="fa fa-edit"  id="iconStatus2"></i> </button>
        </form> 
        <form method="post"  id="form2<?php echo $table['id']?>" action="index.php?modulo=altera_pass" style="float:left;">
                <input type="hidden" name="id" value="<?php echo $table["id"]?>">
                <input type="hidden" name="password" value="<?php echo $table["password"]?>">
                <input type="hidden" name="email" value="<?php echo $table["email"]?>">
                <button class="btn btn-brand bt_form" id="btn3"><i class="fa fa-key"  id="iconStatus2"></i></button>
        </form> 
        <form enctype="multipart/form-data" method="post"  id="excluirUsuarios_<?php echo $table["id"]?>" action=""  style="float:left;">
                <input type="hidden" name="id" value="<?php echo $table["id"]; ?>">
                <input type="hidden" name="name" value="<?php echo $table["name"]?>">
                <button type="submit" class="btn btn-primary bt_form btn_excluiUsuario"><i class="fa fa-trash"  id="iconStatus2"></i></button>
        </form>
</td>
</tr>
<?php }   ?>  

</tbody>
<tfoot>
<tr>
<th>STATUS</th>
<th>Team</th>
<th>Nome</th>
<th>E-mail</th>
<th>Start Date</th>
<th>settings</th>
</tr>
</tfoot>
</table>
</div>
                                </div>
                                </div>