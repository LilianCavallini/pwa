          <?php
           $id =  $_SESSION['user_id'];
           
          ?>
         <?php
$PDO = db_connect();
$sql = "SELECT * FROM cheilgt_users  WHERE id=".$id;
$stmt = $PDO->prepare($sql);
$stmt->execute();
$myaccount = $stmt->fetchAll(PDO::FETCH_ASSOC);

 
foreach($myaccount as $ma){ 
?>
        <div class="card">
        <h5 class="card-header">My Account</h5>
         <?php echo "Seu e-mail cadastrado: ".$ma['email'];?><br>
    <div class="card-body">
    <form method="post"  id="form2<?php echo $ma['id']?>" action="index.php?modulo=altera_pass" style="float:left;">
                <input type="hidden" name="id" value="<?php echo $ma["id"]?>">
                <input type="hidden" name="password" value="<?php echo $ma["password"]?>">
                <input type="hidden" name="email" value="<?php echo $ma["email"]?>">
                <button class="btn btn-brand bt_form" id="btn3"><i class="fa fa-key"  id="iconStatus2"></i> Alterar senha de acesso</button>
        </form> 
        <div style="clear:both"></div>
        <form method="post" class="checkbox-form" id="usersEdit">
                <div class="form-group">
                    <label for="validationServer01">Nome*</label><div class="help" data-toggle="tooltip"  title="
<h4>Nome</h4>
É obrigatório inserir o nome completo do usuário" data-html="true"><i class="fa fa-question" ></i></div>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $ma['id'];?>">      
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo $ma['name'];?>">                       </div>
 
                <div class="form-group">
                     <label for="validationServer01">Departamento*</label><div class="help" data-toggle="tooltip"  title="
<h4>Team</h4>
É obrigatório escolher um time para o usuário. " data-html="true"><i class="fa fa-question" ></i></div>
                       <select id="team" name="team" class="form-control">
                       <?php if ($_SESSION['team']==0){?>
                       <option value='0' <?php if($ma['team']=="0"){echo "selected";}?>>ADM deste site</option>
                       <?php } ?>
                                        <option value='2' <?php if($ma['team']=="2"){echo "selected";}?>>Corporate</option>
                                        <option value='3' <?php if($ma['team']=="3"){echo "selected";}?>>Campaign</option>
                                        <option value='6' <?php if($ma['team']=="6"){echo "selected";}?>>BTL</option>
                                        <option value='4' <?php if($ma['team']=="4"){echo "selected";}?>>Retail</option>
                                        <option value='5' <?php if($ma['team']=="5"){echo "selected";}?>>BI</option>
                        </select>
                   </div>      
                   
                    <button type="submit" class="btn btn-primary" id="btn_usersEdit">Salvar</button>
                </form>
                </div>
        </div>
        <?php }?>