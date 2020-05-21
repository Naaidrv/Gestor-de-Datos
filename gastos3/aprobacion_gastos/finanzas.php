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
            <a class="nav-link" href="../gastos/agregar_gastos.php">Gastos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aprobar_gasto.php">Aprobación gastos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="finanzas.php">Finanzas</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container"><br>
      <h2>Aprobaciones de gastos por Finanzas</h2><br><br>
      <table class="table table-bordered">
        <tr>
          <th>Num trabajador</th>
          <th>Concepto</th>
          <th>Importe</th>
          <th>Aprobar</th>
          <th>Rechazar</th>
        </tr>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
