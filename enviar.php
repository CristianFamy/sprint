<?php


enviar(  $_FILES['adjunto']['name'] );

function enviar($adjunto)
{
    if( isset($_POST)){
        if($adjunto){
            $dir_subida = 'Carpeta_de_archivos_para_Imprimir/';
            $archivo = $dir_subida . basename($adjunto);

            //ahora de sube a la carpeta del servidor
            move_uploaded_file($_FILES['adjunto']['tmp_name'],$archivo);

            echo "<h1> Ya podes retirar tu impresion por la libreria , recorda llevar el numero de retiro</h1>";
            
            echo "Archivo impreso :" . basename($adjunto);
            echo "<br>";
            echo "Cliente : Juan ";
            echo "<br>";
            $DateAndTime = date('m-d-Y h:i:s a', time());  
            echo "Hora en que se imprimio= ". $DateAndTime;
            
            
         }
    }     
}


?>