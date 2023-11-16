<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
  <title>Document</title>
</head>

<body>
  <div class="top">
    <h2>Gestion de Usuarios</h2>
    <a class="save2" href="view">Agregar</a>
  </div>

  <div class="center">
    <table>
      <thead>
        <tr>
          <td>Usuario</td>
          <td>E-mail</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($formas as $form)
        <tr>
          <td>{{$form->nombre}}</td>
          <td>{{$form->email}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>