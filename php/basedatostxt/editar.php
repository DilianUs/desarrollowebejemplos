<?php
session_start();
if($_SESSION ["validado"]== false){
    header("location: index.php?error=1");
}


$id = (isset($_GET["id"])) ? $_GET["id"] : "";
$nombre = (isset($_GET["nombre"])) ? $_GET["nombre"] : "";
$edad = (isset($_GET["edad"])) ? $_GET["edad"] : "";
$pasatiempo = (isset($_GET["pasatiempo"])) ? $_GET["pasatiempo"] : "";
$boton = (isset($_GET["boton"])) ? $_GET["boton"] : "";

?>

<html>
<head>

</head>
<body>
<form action="procesar.php" method="get">
    <input type="hidden" name="id" value="<?=$id; ?>">
    <p>Nombre: <input type="text" name="nombre" value="<?=$nombre; ?>"></p>
    <p>Edad: <input type="text" name="edad" value="<?=$edad ?>"></p>
    <p>Pasatiempo:
        <select name="pasatiempo">
            <option <?=($pasatiempo=="television")?"Selected":""; ?>>television</option>
            <option <?=($pasatiempo=="videojuegos")?"Selected":""; ?>>videjuegos</option>
            <option <?=($pasatiempo=="cine")?"Selected":""; ?>>cine</option>
        </select></p>
    <p>
    <?php if($boton=="Agregar") { ?>
    <input type="submit" name="boton" value="Guardar">
    <?php } else { ?>
    <input type="submit" name="boton" value="Editar">
    <?php } ?>
</p>
</form>
</body>
</html>
