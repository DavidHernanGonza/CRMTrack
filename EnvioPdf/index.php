<!DOCTYPE html>
<html>
<head>
    <title>Envío de correos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    table, th, td {
        border: 1.5px solid black;
        text-align: center;
    }
</style>
</head>
<body>
    <div class="formulario mt-2">
        <form action="Controller/email.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo" class=""/>
            <input type="submit" value="SUBIR ARCHIVO CSV" class="btn btn-primary" name="enviar">
        </form>
    </div>
    <div class="formulario mt-2">
        <form action="Controller/email.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
            <input type="submit" value="Mostrar datos" class="btn btn-primary" name="mostrar_datos">
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>