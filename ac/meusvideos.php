   <?php
// inclui o arquivo de inicialização
require '_class/check.php';

$PDO = db_connect();
//
$sql = "SELECT * FROM cheilgt_files WHERE id_user = '".$_SESSION['user_id']."' order by id_files ASC";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$tables = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
 ?>
 <?php //print_r($_SESSION['clientes']);?>
  <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Meus videos</h5>
                                <a href="index.php?modulo=add_videos" class="btn btn-success bt_form enable right">Adicionar Video</a>
                            </div>
 <div class="card-body">
  <div class="table-responsive">
<table class="table table-striped table-bordered first" id="teste2">
<thead>
<tr>

<th>ID</th>
<th>Data</th>
<th>Titulo</th>
<th>Descrição</th>
<th>Arquivo</th>
<th>Settings</th>

</tr>
</thead>
<tbody>
<?php        foreach($tables as $table){ ?>
<tr>

<td data-title="Titulo"><?php echo $table["id_files"]?></td>
<td data-title="Data"><?php echo date("d/M/Y | H:i:s",strtotime($table["date_files"]));?></td>
<td data-title="Titulo"><?php echo $table["titulo_files"]?></td>
<td data-title="Artquivo"><?php echo $table["arquivo"]?></td>
<td data-title="" id="teste2icones"> 
        <form method="post"  id="form2<?php echo $table['id']?>" action="index.php?modulo=altera_users" style="float:left;">
                <input type="hidden" name="id" value="<?php echo $table["id_files"]?>">
                <input type="hidden" name="name" value="<?php echo $table["titulo_files"]?>">
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

</tr>
</tfoot>
</table>
</div>
                                </div>
                                </div>