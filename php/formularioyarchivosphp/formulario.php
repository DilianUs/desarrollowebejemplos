

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Tabla de datos</h1>
    <?php include "archivos.php" ?>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])?>" method="get">
        <input type="submit" name="boton" value="mostrar">
        
        <h3>Agregar datos</h3>
        <label for="nombre">Nombre: </label><input type="text" name="nombre" value=""><br><br>
        <label for="edad">edad: </label><input type="text" name="edad" value=""><br><br>
        <label for="pasatiempo">pasatiempo: </label><input type="text" name="pasatiempo" value=""><br><br>
        <input type="submit" name="boton" value="agregar">

    </form>

</body>
</html>