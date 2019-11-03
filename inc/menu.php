<?php if($_SESSION['team']==0){?>      
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
<nav class="navbar navbar-expand-lg navbar-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<i class=" fas fa-bars"></i>
</button>
<div class="navbar collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav flex-column">
<li class="nav-item <?php if($_GET['modulo']=='myaccount'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='myaccount'){ echo 'amenuactive ';} ?>" href="index.php?modulo=home" data-toggle="" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-1"><i class="fa  fa-home"></i> Home  <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">1</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='myaccount'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='myaccount'){ echo 'amenuactive ';} ?>" href="index.php?modulo=myaccount" data-toggle="" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13"><i class="fa  fa-user"></i> Meus dados  <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">13</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='add_users' or $_GET['modulo']=='add_customerusers' or $_GET['modulo']=='lista_users' or $_GET['modulo']=='altera_users'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='add_users' or $_GET['modulo']=='add_customerusers' or $_GET['modulo']=='lista_users' or $_GET['modulo']=='altera_users' ){ echo 'amenuactive ';} ?> " href="index.php?modulo=lista_users" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa  fa-users"></i> Cheilers <span class="badge badge-success">6</span></a>
 

</li>
<li class="nav-item <?php if($_GET['modulo']=='myaccount'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='myaccount'){ echo 'amenuactive ';} ?>" href="index.php?modulo=home" data-toggle="" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-1"><i class=" fas fa-balance-scale
"></i> Regulamento  <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">1</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='lista_portfolio'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='lista_portfolio'){ echo 'amenuactive ';} ?>" href="index.php?modulo=meusvideos" data-toggle="" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-fw fa-camera-retro red"></i>Meus Videos<?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">10</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='lista_portfolio'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='lista_portfolio'){ echo 'amenuactive ';} ?>" href="index.php?modulo=lista_portfolio" data-toggle="" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fa fa-fw fa-film"></i> Vídeos<?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">10</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='lista_portfolio'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='lista_portfolio'){ echo 'amenuactive ';} ?>" href="index.php?modulo=lista_portfolio" data-toggle="" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fab fa-fw fa-blogger"></i> Blog<?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">10</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='history'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='history'){ echo 'amenuactive ';} ?>" href="index.php?modulo=history" data-toggle="" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12"><i class="fa fa-fw fa-archive green"></i>History    <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">12</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='reports'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='reports'){ echo 'amenuactive ';} ?>" href="index.php?modulo=reports" data-toggle="" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12"><i class="fa fa-fw fa-chart-line green"></i>Reports    <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">12</span></a>
</li>
</ul>
</div>
</nav>
</div>
</div>
<?php  } else {?>  

<?php if($_SESSION['team']!=1){?>      
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
<nav class="navbar navbar-expand-lg navbar-light">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav flex-column">
<li class="nav-item <?php if($_GET['modulo']=='myaccount'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='myaccount'){ echo 'amenuactive ';} ?>" href="index.php?modulo=myaccount" data-toggle="" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13"><i class="fa fa-fw fa-snowflake"></i>My Account    <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">13</span></a>
</li>   

<li class="nav-item <?php if($_GET['modulo']=='add_users' or $_GET['modulo']=='add_customerusers' or $_GET['modulo']=='lista_users' or $_GET['modulo']=='altera_users'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='add_users' or $_GET['modulo']=='add_customerusers' or $_GET['modulo']=='lista_users' or $_GET['modulo']=='altera_users' ){ echo 'amenuactive ';} ?> " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-user-circle"></i> Users <span class="badge badge-success">6</span></a>
<div id="submenu-2" class="collapse submenu <?php if($_GET['modulo']=='add_users' or $_GET['modulo']=='add_customerusers' or $_GET['modulo']=='lista_users' or $_GET['modulo']=='altera_users'){ echo 'show ';} ?>" style="">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link pai  <?php if($_GET['modulo']=='add_users'){ echo 'active';} ?>" href="index.php?modulo=add_users">Add Cheil user</a>
</li>
<li class="nav-item">
<a class="nav-link pai  <?php if($_GET['modulo']=='add_customerusers'){ echo 'active';} ?>" href="index.php?modulo=add_customerusers">Add Customer</a>
</li>

<li class="nav-item">
<a class="nav-link pai  <?php if($_GET['modulo']=='lista_users'){ echo 'active';} ?>" href="index.php?modulo=lista_users">All</a>
</li>

</ul>
</div>
</li>

<li class="nav-item <?php if($_GET['modulo']=='lista_portfolio'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='lista_portfolio'){ echo 'amenuactive ';} ?>" href="index.php?modulo=lista_portfolio" data-toggle="" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fa fa-fw fa-heart red"></i>Portfolio    <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">10</span></a>
</li>


<li class="nav-item <?php if($_GET['modulo']=='lista_portfolio'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='lista_portfolio'){ echo 'amenuactive ';} ?>" href="index.php?modulo=lista_portfolio" data-toggle="" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fa fa-fw fa-heart red"></i>Portfolio    <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">10</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='approval'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='approval'){ echo 'amenuactive ';} ?>" href="index.php?modulo=approval" data-toggle="" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fa fa-fw fa-thumbs-up green"></i>Approval    <?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">11</span></a>
</li>
<li class="nav-item <?php if($_GET['modulo']=='rejected'){ echo 'menuactive ';} ?> ">
<a class="nav-link <?php if($_GET['modulo']=='rejected'){ echo 'amenuactive ';} ?>" href="index.php?modulo=rejected" data-toggle="" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13"><i class="fa fa-fw fa-thumbs-down green"></i>Rejected media<?php //echo sha1(md5('123mudar')); ?>
<span class="badge badge-success">13</span></a>
</li>

</ul>
</div>
</nav>
</div>
</div>
<?php  }}?>      