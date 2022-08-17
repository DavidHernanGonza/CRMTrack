<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <h2>Prospectos de correos</h2>
    <table>
        <th>Correo</th>
        <?php $mostrar = $conexión -> query("SELECT * FROM correos_informacion");
        while ($fila = $mostrar -> fetch_assoc()) { //El fetch_assoc nos permitirá recorrer las filas y las columnas.
        ?>
        <tr>
            <td><?php  echo $fila['correo']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>