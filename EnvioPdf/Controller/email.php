<?php 
set_time_limit(500);
include '../Model/conexion.php';
require("../Model/enviarCredencial.php");
if(isset($_POST["enviar"])){ //isset nos permite recepcionar una variable que si exista y que no sea null
    require_once("../Model/conexion.php");
    require_once("../Model/funciones.php");
    $enviar = new Email();

    $archivo =$_FILES["archivo"]["name"];
    $archivo_copiado = $_FILES["archivo"]["tmp_name"];
    $archivo_guardado ="copia_".$archivo;
    $tipo_archivo = $_FILES['archivo']['type'];
    //echo $archivo . "esta en la ruta temporal: " . $archivo_copiado;
    
    if(copy($archivo_copiado,$archivo_guardado)){
        //echo "Se copió correctamente el archivo temporal a nuestra carpeta de trabajo<br>";
    }else{
        //echo "hubo un error";
    }

    $type = explode(".",$_FILES['archivo']['name']); 
    
    if(strtolower(end($type)) == 'csv'){ //Solo archivos en formato CSV , strtolower convierte a minúsculas y end() avanza el puntero interno del array hasta su último elemento y devuelve su valor.
        if(file_exists($archivo_guardado)){ //file_exists — Comprueba si existe un fichero o directorio
            $fp= fopen($archivo_guardado,"r"); //fopen — Abre un fichero o un URL y r abre el archivo sólo para lectura. La lectura comienza al inicio del archivo.
            $rows =0;//Nos ayudará a imprimir desde la fila 1 y no la fila 0 donde vienen los titulos de las columnas
            echo "El archivo " . $archivo. " se cargó con éxito<br>"; 
            while($datos=fgetcsv($fp,0,",")){
                $rows ++;
                //echo $datos[0] ." ".$datos[1]." ".$datos[2]." ".$datos[3]." ".$datos[4]." ".$datos[5]." ".$datos[6]." ".$datos[7]." ".$datos[8]." ".$datos[9]." ".$datos[10]." ".$datos[11]." ".$datos[12]." ".$datos[13]." ".$datos[14]." ".$datos[15];
                if($rows > 1){
                    //si no existe el correo , insertarlo, en caso contrario no debe ser guardado el correo en la BD                       
                    $rob=new Correo();
                    $existeCorreo=$rob->existeCorreo($datos[1]);
                    if($existeCorreo){
                        echo "¡Ya existe el correo: " .$datos[1]."<br>";
                    }else{
                        echo "no existe: " . $datos[1] ."<br>";
                        //$resultado= insertar_datos($datos[1]);      
                        $insertar = $rob->insertar_datos($datos[1]);
                        //$send = $enviar->enviar($datos[1]);
                        //sleep(2);                
                        if($insertar){
                            //echo "Se inserto los datos correctamente<br/>";
                        }else{
                            echo "¡No se insertaron en la base de datos!<br/>";
                        }
                    }           
                }
            }
            header("location:../index.php");    
        }else{
            echo "no existe el archivo copiado";
        }

    } else { 
        echo "Ocurrió el siguiente error en la carga: -issue error- solo se permiten archivos con formato .csv intentalo de nuevo.";
    }
}
if(isset($_POST["mostrar_datos"])){
    require("../View/mostrarDatos.php");
}
?>