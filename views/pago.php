<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--BOOTSTRAP-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--**BOOTSTRAP**-->
        
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container row m-5">
<div class="col-md-7" >
<img src="../content/img/coaching.jpg" alt="" style="width:300px; margin:5px; " class="rounded">
<H2>Sesión de coaching grupal</H2>
<p>Descripcion de las Sesión de coaching grupal</p>

</div>
<div class="col-md-5" >

<div class="mt-4" style="box-shadow: 2px 2px 5px #999;">

<div style="margin:10px">
<br>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre Completo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Correo</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <div class="row col-md-12">
    <div class="" style="margin:3px">
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Mexico</option>
      <option>España</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    </div>
    <div class="" style="margin:3px">
    <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    </div>
    
    
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Acepto los <a href="">Términos del servicio </a> y las <a href="">Politicas de Privacidad</a> </label>
  </div>
  <button type="submit" class="btn btn-primary">Comienza ahora</button>
</form>
<br>
</div>


</div>

</div>



</div>

<select id="pais">
<option value="">SELECCIONE UN PAIS</option>
<option value="+54">ARGENTINA</option>
<option value="+56">CHILE</option>
<option value="+52">MEXICO</option>
</select>
<br>
<input type="text" id="telf" disabled="disabled"/>

<script>
        var pais = document.getElementById('pais');
var telf = document.getElementById('telf');

pais.onchange = function(e) {
  telf.value = this.value;
  if ((this.value).trim() != '') {
    telf.disabled = false;
  } else {
    telf.disabled = true
  }
}

telf.onkeyup = function(e) {
  var nums_v = this.value.match(/\d+/g);
  if (nums_v != null) {
    this.value = '+' + ((nums_v).toString().replace(/\,/, ''));
  } else {
    this.value = pais.value;
  }
}


</script>


</body>
</html>