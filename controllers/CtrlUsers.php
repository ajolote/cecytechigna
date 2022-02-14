<?php
    require_once "models/MdUsers.php";
    class CUsuarios{
        
      public function IniciarSesion(){
        $ModUsuarios = new MdUsuarios();

          if(isset($_POST["usuario"])) {
              if (preg_match('/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/',$_POST["usuario"]) && preg_match('/^[a-zA-Z0-9.-]+$/',$_POST["password"])) {
                  $tbBD = "tb_usuario";
                  $datos = array("usuario"=>$_POST["usuario"], "password"=>$_POST["password"]);
                  $resultado = $ModUsuarios->MIniciarSesion($tbBD,$datos);
                  if ($resultado["Uemail"] == $_POST["usuario"] && $resultado["Upassword"] == $_POST["password"]) {
                  $_SESSION["ingreso"] = true;
                  $_SESSION["rol"] = $resultado["Uperfil"];
                  echo '<script>
                  window.location = "begin";
                  </script>';
                }else {
                    echo '<br><div class="alert alert-danger">Error al ingresar</div>';
                }
              }
        }
    }
    }