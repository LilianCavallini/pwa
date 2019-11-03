          <?php
           $id = $_POST['id'];
          
          $email = $_POST['email'];
          $password = $_POST['password'];
          
          ?>
        
        <div class="card">
        <h5 class="card-header">Edit User</h5>
         
    <div class="card-body">
        <form method="post" class="checkbox-form" id="usersEditPass">
                <div class="form-group">
                    <label for="validationServer01">Add new password*</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id;?>">      
                    <input type="text" class="form-control" id="password"   name="password" value="">                       </div>
                    <button type="submit" class="btn btn-primary" id="btn_usersEditPass">Go!</button>
                </form>
                </div>
        </div>