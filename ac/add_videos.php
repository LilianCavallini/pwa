
        <div class="card">
        <h5 class="card-header">Add Video</h5>
       
    <div class="card-body">
        <form method="post" class="checkbox-form" id="" action="_class/addVideos.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="validationServer01">titulo*</label><div class="help" data-toggle="tooltip"  title="
<h4>Title</h4>
É obrigatório inserir o nome completo do usuário" data-html="true"><i class="fa fa-question" ></i></div>
                    <input type="text" class="form-control" id="titulo" name="titulo_files" >
                 
                </div>
                <div class="form-group">
                    <label for="validationServer01">descrição</label><div class="help" data-toggle="tooltip"  title="
<h4>Description</h4>
É obrigatório preencher o endereço de e-mail do usuário. <br><br> Este e-mail será utilizado no login" data-html="true"><i class="fa fa-question" ></i></div>
                    <textarea class="form-control" id="texto_files" name="texto_files" ></textarea>
                </div>
              <div class="form-group">
<label for="validationServer01">Escolha um ou mais arquivos para upload*   </label><div class="help" data-toggle="tooltip"  title="
<h4>Atenção</h4>
Somente faça upload de arquivos com a extensão .mp4 .
" data-html="true"><i class="fa fa-question" ></i></div>
<input name="upload2" type="file" class="form-upload" id="upload2"/>
<!--input type="file" webkitdirectory  name="upload[]" type="file" multiple  class="form-upload"/-->
</div>
<div style="clear:both; margin-bottom:40px;"></div>
                    <button type="submit" class="btn btn-primary" id="btn_files2">Go!</button>
                </form>
                </div>
        </div>