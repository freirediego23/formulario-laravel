<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
  <title>Agregar Usuarios</title>
</head>

<body>

  <div class="top">
    <h4>Agregar Usuarios</h4>
    <a class="links" href="form">Volver al Listado</a>
  </div>
  <main>

    <div class="main">

      <form action="formPost" method="post">

        <div class="separate">
          <div class="form-group">
            <label for="">Nombre</label><br>
            <input type="text" name="nombre" placeholder="Ingrese el nombre"><br>
          </div>
          <div class="form-group2">
            <label for="">Apellido</label><br>
            <input type="text" name="apellido" placeholder="Ingrese el apellido"><br>
          </div>
        </div>
        <label for="">E-mail</label><br>
        <input class="email" type="text" name="email" placeholder="Ingrese el E-mail"><br>

        <label for="">Contraseña</label><br>
        <input type="text" name="contraseña" placeholder="Ingrese una Contraseña"><br>


        <button class="save" type="submit">Guardar</button>
      </form>
    </div>
  </main>

</body>

</html>