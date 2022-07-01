<?php
session_start();

$usuario = (isset($_GET["usuario"])) ? $_GET["usuario"] : "";
$contrasena = (isset($_GET["contrasena"])) ? $_GET["contrasena"] : "";
$error = (isset($_GET["error"])) ? $_GET["error"] : "";
    function validarUsuario($usuario, $contrasena){
        if($usuario="usuario" && $contrasena="contrasena"){
            return true;
        }else{
            return false;
        }

    }

function LeerRegistros(){
    $registros = file("registros.txt",FILE_IGNORE_NEW_LINES);

    $tabla = "<table border>";
    for($i=0; $i < count($registros); $i++){
        $campos = explode(",", $registros[$i]);

        $tabla .= "<tr><td><input type='checkbox' name='eliminar[]' value='${i}'></td>";
        $tabla .= "<td><a href='editar.php?id=${i}&nombre=${campos[0]}&edad=${campos[1]}&pasatiempo=${campos[2]}'>${campos[0]}</a></td>";
        $tabla .= "<td>${campos[1]}</td>";
        $tabla .= "<td>${campos[2]}</td>";
        $tabla .= "</tr>";

    }
    $tabla .= "</table>";
    return $tabla;
}

if(isset )
$validado = validarUsuario($usuario, $contrasena);
$_SESSION ["validado"]= $validado;

?>

<html>
<head>

</head>
<body>

<?php 
if($validado ==true) { ?>
         <form action="procesar.php" method="get">
        <?=LeerRegistros();?>
        <p>
            <input type="submit" name="boton" value="Eliminar">
            <input type="submit" name="boton" value="Agregar">
          </p>
          </form> 
     <?php }else { ?>
        <p>
        Usuario : <input type="text" name="usuario">
        Contraseña : <input type="text" name="contraseña">
        </p>

       <?php  }?>

</body>
</html>
