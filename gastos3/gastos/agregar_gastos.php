<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Agregar gastos</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark">
      <a class="navbar-brand" href="#">ApWebs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../empleados/agregar_empleados.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../departamento/agregar_departamentos.php">Departamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gastos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../aprobacion_gastos/aprobar_gasto.php">Aprobación gastos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../aprobacion_gastos/finanzas.php">Finanzas</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container"><br>
       <div class="col-sm-8"><h2>Agregar Gastos</h2></div>
      <form method="post" action="administrar_empleados.php">
    <div class="form-row">
      <div class="col-6">
        <label for="">Número de trabajador</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>
      <div class="col-6">
        <label for="">Departamento</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="col-6">
        <label for="">Importe</label>
        <input type="text" class="form-control" name="apellidoP" required>
      </div>

      <div class="col-6">
        <label for="">Concepto</label>
        <input type="text" class="form-control" name="rfc" required>
      </div>
      <div class="col-3">
        <label for="">Cuentas</label>
        <select class="custom-select my-1 mr-sm-2" id="departamento" name="cuentas">
          <option selected>Cuenta</option>

      </div>
  </div>
      </div>
    </div><br>
    <input type='hidden' name='insertar' value='insertar'>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form><br><br>
  </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
