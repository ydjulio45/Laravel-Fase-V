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
      <h4 class="center-align">Crear Registro</h4>
      <article class="col s6 offset-s3">
        <form action="/roles" method="POST">

          @csrf

          <div class="mb-3">
            <label for="" class="form-label">Tipo Rol</label>
            <input id="tipoRol" name="tipoRol" type="text" class="form-control" tabindex="2">
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