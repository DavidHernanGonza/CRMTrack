<?php
require '../Classes/PHPExcel/IOFactory.php'; //Agregamos la librería 
	require '../models/conexion2.php'; //Agregamos la conexión
	$nombre_archivo = $_FILES['file']['name'];
	//Variable con el nombre del archivo
	$tipo_archivo = $_FILES['file']['type'];
$tamano_archivo = $_FILES['file']['size'];
move_uploaded_file($_FILES['file']['tmp_name'],'../content/archivos/'.$nombre_archivo);

	
$nombreArchivo = '../content/archivos/'.$nombre_archivo;
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);
	
	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	

	
	for ($i = 2; $i <= $numRows; $i++) {
		
		$nombre = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		$telefono = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $correo = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
        $fecha_contacto = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		$fecha_seguimiento = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $comentario = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
        $seguimiento = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		$tareas = $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
        $statues = $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
        $fuente_contacto = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
		$producto = $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
		$status_clientes = $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
		$dato_gene = $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
		
       
		
		$sql1 = "INSERT INTO dato_gen (id, nombre,telefono, correoda, fecha_contacto, fecha_seguimiento, comentario, seguimiento, tarea, statuss, fuente_contacto, productos, status_cliente, dato_gene, hora_seguimeinto, hora_tarea) VALUES(null,'$nombre','$telefono','$correo','$fecha_contacto','$fecha_seguimiento','$comentario','$seguimiento','$tareas','$statues','$fuente_contacto','$producto','$status_clientes','$dato_gene','','')";
		$sql2="INSERT INTO cliente(id_cliente, titulo, nom_cliente, apellido, empresa, departemento, fecha_nacimiento, genero, correo, telefono_casa, celular, fax, otro_felefono, comunicacion_preferido, facebook, youtube, twitter, linkedln, instagram, idioma_preferido, fuente_prospecto, estatus_prospecto, num_calle, depto_unidad, nombre, direccion, codigo_postal, pais, region, estado, ciudad, localidad, agrupamiento, calificacion, estatus_marital, hijos, notas_gen, nota_personal_contacto, contacto_equipo) VALUES (null,'','$nombre','','','','','','$correo','','$telefono','','','','','','','','','','$fuente_contacto','','','','','','','','','','','','','','','','','','')";
		$sql3="INSERT INTO historial(correo, producto, seguimineto, fechasegui, tarea, fechatarea, comentario, estatus_histo, hrs_tarea, hrs_seguimiento) VALUES ('$correo','','$seguimiento','$fecha_seguimiento','$tareas','$fecha_contacto','$comentario','$statues','','')";
		$result1 = $mysqli->query($sql1);
		$result2 = $mysqli->query($sql2);
		$result3 = $mysqli->query($sql3);
	}
	echo '<script type="text/javascript">
    alert("Datos agregado exitosamente");
    window.location.href="../views/index.php";
    </script>';
	
?>