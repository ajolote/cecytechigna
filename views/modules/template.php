<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse login-page">
<!-- <body class="hold-transition sidebar-mini  login-page"> -->


<!--incluir cabecera, pie pagina de contenido y menu -->
<?php
if (isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true) {
  //<!-- Site wrapper -->
  echo '<div class="wrapper">';
  include "views/modules/header.php";
  if ($_SESSION["rol"] == 1){
    include "views/modules/menu.php";
  }

  $url = array();
  if (isset($_GET["url"])) {
    $url = explode("/",$_GET["url"]);

    if ($url[0] == "inicio") {
      include "views/modules/begin.php";
    }
   
  }else{
    include "views/modules/begin.php";
  }

  include "views/modules/footer.php";
  echo '</div>';
  //<!-- ./wrapper -->
  }else if(isset($_GET["url"])){
    if ($_GET["url"] == "ingreso") {
      include "viwes/modules/login.php";
    }

  }else{
    include "views/modules/login.php";
  }
?>

  <!-- Control Sidebar 
  <aside class="control-sidebar control-sidebar-dark">
     Control sidebar content goes here
  </aside>
   /.control-sidebar -->


<!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="views/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="views/assets/dist/js/demo.js"></script> -->
</body>
</html>
