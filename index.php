<?php
session_start();
require '_class/check.php';
require_once '_class/init.php';
require 'timeout.php';
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<link rel='manifest' href='/manifest.webmanifest'>
<link rel='manifest' href='/manifest.json'>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
   <link rel="stylesheet" href="assets/vendor/multi-select/css/multi-select.css">
   <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/inputmask/css/inputmask.css" />
    <title>Cheil Cases</title>
</head>
<script>

    let deferredPrompt = null;

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
});

async function install() {
  if (deferredPrompt) {
    deferredPrompt.prompt();
    console.log(deferredPrompt)
    deferredPrompt.userChoice.then(function(choiceResult){

      if (choiceResult.outcome === 'accepted') {
      console.log('Your PWA has been installed');
    } else {
      console.log('User chose to not install your PWA');
    }

    deferredPrompt = null;

    });

 
  }
}
</script>
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
      <?php include_once('inc/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
<?php include_once('inc/menu.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <?php if($_SESSION['team']==1){?>  
        <div class="dashboard-wrapper2 dashboard-content2"  >
        <?php } else {?>
         <div class="dashboard-wrapper dashboard-content "  >
         <?php }?>
        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <?php
                                if(isset($_GET['modulo'])){
                                    $modulo = $_GET['modulo'];
                                    include_once('ac/'.$modulo.'.php'); 
                                }
                                else {
                                    $modulo = 'home.php';
                                     include_once('ac/home.php'); 
                                }
                                ?>
        </div></div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
   <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js"></script>
    <!-- chart C3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <!-- chartjs js -->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- dashboard finance js 
    <script src="assets/libs/js/dashboard-finance.js"></script>-->
    <!-- main js -->
<!-- main js -->
<script src="assets/vendor/jquery/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/vendor/jquery/dataTables.buttons.min.js"></script>
<script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="assets/vendor/datatables/js/data-table.js"></script>
<script src="assets/vendor/jquery/buttons.html5.min.js"></script>
<script src="assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
 <script src="assets/libs/js/main-js.js"></script>

    
 
</body>
</html>

 
