<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <title>Document</title>
</head>
<body>
 <br>
  <section class="container">
    <div class="row">
      <h3 class="center-align"> Bienvenido al amigo leal</h3>
      <h4 class="center-align">Editar Registro</h4>
      <article class="col s6 offset-s3">

      <form action="/usuarios/{{$usuario->idUsuario}}" method="Post">

  @method('PUT')
    @csrf
    
    <div class="mb-3">
      <label for="" class="form-label">Id Doc</label>
      <input value="{{$usuario->idDoc}}" id="idDoc" name="idDoc" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Id Rol</label>
      <input value="{{$usuario->idRol}}" id="idRol" name="idRol" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Primer Nombre</label>
      <input value="{{$usuario->pNombre}}" id="pNombre" name="pNombre" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Segundo Nombre</label>
      <input value="{{$usuario->sNombre}}" id="sNombre" name="sNombre" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Primer Apellido</label>
      <input value="{{$usuario->pApellido}}" id="pApellido" name="pApellido" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Segundo Apellido</label>
      <input value="{{$usuario->sApellido}}" id="sApellido" name="sApellido" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Correo</label>
      <input value="{{$usuario->correo}}" id="correo" name="correo" type="text" class="form-control" tabindex="2">

      <label for="" class="form-label">Contraseña</label>
      <input value="{{$usuario->contraseña}}" id="contraseña" name="contraseña" type="text" class="form-control" tabindex="2">
    </div>
   
    <p class="center-align">
    
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </p>
</form>

</article>
    </div>
  </section>

</body>

</html>

