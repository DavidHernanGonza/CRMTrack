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
		
		$tutilo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$nom_cliente = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
        $apellido = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
        $empresa = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$departamento = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
        $fechanacimiento = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
        $genero = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		$correo = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
        $telefono_casa = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
        $celular = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		$fax = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
        $otro_telefono = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
        $comunicación_preferido = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
		$facebook = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
        $youtube = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();
        $twitter = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();
		$linkedln = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
        $instagram = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
        $idioma_preferido = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();
		$fuente_prospecto = $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();
        $estatus_prospecto = $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();
        $num_calle = $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
		$depto_unidad = $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
		$nombre = $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
		$direccion = $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
        $codigo_postal = $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
        $pais = $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
        $region = $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
        $estado = $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
        $ciudad = $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
		$localidad = $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
        $agrupamiento = $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
        $calificacion = $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
		$estatus_marital = $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
        $hijos = $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
        $notas_gen = $objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
		$nota_personal_contacto = $objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();
		$contacto_equipo = $objPHPExcel->getActiveSheet()->getCell('AK'.$i)->getCalculatedValue();
        
		
		$sql = "INSERT INTO cliente(id_cliente, titulo, nom_cliente, apellido, empresa, departemento, fecha_nacimiento, genero, correo, telefono_casa, celular, fax, otro_felefono, comunicacion_preferido, facebook, youtube, twitter, linkedln, instagram, idioma_preferido, fuente_prospecto, estatus_prospecto, num_calle, depto_unidad, nombre, direccion, codigo_postal, pais, region, estado, ciudad, localidad, agrupamiento, calificacion, estatus_marital, hijos, notas_gen, nota_personal_contacto, contacto_equipo) VALUES (null,'$tutilo','$nom_cliente','$apellido','$empresa','$departamento','$fechanacimiento','$genero','$correo','$telefono_casa','$celular','$fax','$otro_telefono','$comunicación_preferido','$facebook','$youtube','$twitter','$linkedln','$instagram','$idioma_preferido','$fuente_prospecto','$estatus_prospecto','$num_calle','$depto_unidad','$nombre','$direccion','$codigo_postal','$pais','$region','$estado','$ciudad','$localidad','$agrupamiento','$calificacion','$estatus_marital','$hijos','$notas_gen','$nota_personal_contacto','$contacto_equipo')";
		$result = $mysqli->query($sql);
	}
    echo '<script type="text/javascript">
    alert("CONTACTOS agregado exitosamente");
    window.location.href="../views/listaClienteAgregados.php";
    </script>';
	
?>