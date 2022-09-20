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
        <form action="/facturas/{{$factura->idFactura}}" method="Post">



          @method('PUT')
          @csrf

          <div class="mb-3">
            <label for="" class="form-label">id_Usuario</label>
            <input value="{{$factura->idUsuario}}" id="idUsuario" name="idUsuario" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Nombre</label>
            <input value="{{$factura->nombre}}" id="nombre" name="nombre" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Fecha</label>
            <input value="{{$factura->fecha}}" id="fecha" name="fecha" type="text" class="form-control" tabindex="2">

            <label for="" class="form-label">Precio_Factura</label>
            <input value="{{$factura->preciofact}}" id="preciofact" name="preciofact" type="text" class="form-control" tabindex="2">
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