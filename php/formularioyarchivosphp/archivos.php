<?php
    function mostrar(){
       $archivo_direccion  = "datos.txt";
            if(file_exists($archivo_direccion)){
                $fp = fopen($archivo_direccion, "r");

                $i=0; //contador de lineas
                echo "<table border='1' >";
                echo "<tr><th>Nombre</th>
                <th>Edad</th>
                <th>Pasatiempo</th></tr>";
                while(!feof($fp)){
                    $lines = fgets($fp);//linea como string
                    $field[$i] = explode(",", $lines);
                    echo "<tr>";
                    echo " <td>". $field[$i][0]."</td>". 
                    "<td> ". $field[$i][1]."</td>".
                    "<td> ". $field[$i][2]."</td>";
                    $i++;
                    echo "</tr>";
                } 

                echo "</table>";
            }
            fclose($fp);
            //echo '<button ><a href="formulario.php">regresar</a></button>';
    };

    function agregar(){
        $archivo_direccion  = "datos.txt";
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        $pasatiempo = $_GET['pasatiempo'];

        if(file_exists($archivo_direccion)){
            $fp = fopen($archivo_direccion, "a");
            fwrite($fp,"\n".$nombre,);
            fwrite($fp,",".$edad);
            fwrite($fp,",".$pasatiempo);

        }

        fclose($fp);

    };
    
   if($_REQUEST['boton'] == "mostrar"){
        mostrar();
   }elseif ($_REQUEST['boton'] == "agregar"){
        agregar();
        echo "se escribio con exito";
        mostrar();
   }else{
     echo "no se pudo"; 
   };
?>