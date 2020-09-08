<?php
include '../views/excel/simplexlsx.class.php';
$nombre_archivo = $_FILES['file']['name'];
$xlsx = new SimpleXLSX( 'C:/Users/anapa/Documents/excel/'.$nombre_archivo);
$conn = new PDO( "mysql:host=localhost;dbname=crm", "root", "");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare( "INSERT INTO users (nombre, usuario, email) VALUES (?, ?, ?)");

    $stmt->bindParam( 1, $nombre);
	$stmt->bindParam( 2, $usuario);
	$stmt->bindParam( 3, $email);
	
	foreach ($xlsx->rows() as $fields)
	{
	   $nombre = $fields[0];
	   $usuario = $fields[1];
	   $email = $fields[2];
	   $stmt->execute();
	}
//echo $nombre_archivo;
echo '<script type="text/javascript">
    alert("Arcvhivos cargados correctamente");
    window.location.href="../views/index.php";
    </script>';
?>