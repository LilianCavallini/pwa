<?php
//session_start();
$_SESSION['logged_in']  ;
$_SESSION['user_id']  ;
$_SESSION['user_name']  ;
//print_r($_SESSION);?>
<!-- navbar -->

        <!-- ============================================================== -->
        <div class="dashboard-header">
             <button onclick="install()" class="btn" id="installhome">
  Install
</button><nav class="navbar navbar-expand-lg bg-black fixed-top">
                <a class="navbar-brand" href="index.php?modulo=lista_portfolio"><img src="assets/images/logo_black.png" alt="" class="logo" style="max-height:30px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="saudacao2">
              
<p>Olá <?php echo $_SESSION['user_name'];?></p>

</div>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                       <li class="nav-item nav-user">
                     <a class="nav-link nav-user-img" href="logout.php"   data-toggle="tooltip" title="log out" data-placement="left"><i class="fas fa-power-off mr-2"></i></a>
                    </li>
                        <!--li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['user_name']?></h5>
                                     
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li-->
                    </ul>
                </div>
            </nav>
        </div>