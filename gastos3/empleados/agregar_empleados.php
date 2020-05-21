<?php
  //$mysqli = new mysqli('localhost', 'root', '', 'prueba_gastos');
  require_once("../departamento/departamento.php");
  require_once("../departamento/crud_departamento.php");
  require_once("crud_empleado.php");
  require_once("empleado.php");

  $crud = new CrudDepartamento();
  $departamento = new Departamento();
  $listaDepartamentos = $crud->mostrar();

  $crudEmpleado = new CrudEmpleado();
  $empleado = new Empleado();
  $listaEmpleados= $crudEmpleado->mostrar();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Agregar usuarios</title>
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
            <a class="nav-link" href="#">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../departamento/agregar_departamentos.php">Departamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../gastos/agregar_gastos.php">Gastos</a>
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
       <div class="col-sm-8"><h2>Agregar Trabajador</h2></div>
      <form method="post" action="administrar_empleados.php">
    <div class="form-row">
      <div class="col-6">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>
      <div class="col-6">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="col-6">
        <label for="">Apellido Paterno</label>
        <input type="text" class="form-control" name="apellidoP" required>
      </div>
      <div class="col-6">
        <label for="">Nombre Usuario</label>
        <input type="text" class="form-control" name="usuario">
      </div>
      <div class="col-6">
        <label for="">Apellido Materno</label>
        <input type="text" class="form-control" name="apellidoM" required>
      </div>
      <div class="col-6">
        <label for="">Contraseña</label>
        <input type="text" class="form-control" name="pass">
      </div>
      <div class="col-6">
        <label for="">RFC</label>
        <input type="text" class="form-control" name="rfc" required>
      </div>
      <div class="col-3">
        <label for="">Departamento</label>
        <select class="custom-select my-1 mr-sm-2" id="departamento" name="departamento">
          <option selected>Departamentos</option>
          <?php

          foreach ($listaDepartamentos as $departamento) {?>
                  <option value=".<?php echo $departamento->getIdDepartamento() ?>.">
                    <?php echo $departamento->getNombre() ?>
                  </option>
                  <?php }?>
        </select>

      </div>
    <input type='hidden' name='insertar' value='insertar'>
    <div class="col-6">
      <button type="submit" class="btn btn-primary">Agregar</button>

    </div>
  </form>
</div>
</div><br><br>


<div class="container">
  <table class="table table-bordered">
   <tr>
      <th><strong>ID</strong></th>
     <th><strong>Nombre</strong></th>
      <th><strong>Apellido Pat</strong></th>
      <th><strong>Apellido Mat</strong></th>
      <th><strong>RFC</strong></th>
      <th><strong>Correo</strong></th>
      <th><strong>Departamento</strong></th>
      <th><strong>Actualizar</strong></th>
   </tr>
   <?php foreach ($listaEmpleados as $empleado) {?>
 <tr>
   <td><?php echo $empleado->getIdEmpleado() ?></td>
   <td><?php echo $empleado->getNombre() ?></td>
   <td><?php echo $empleado->getApellidoP()?> </td>
   <td><?php echo $empleado->getApellidoM()?> </td>
   <td><?php echo $empleado->getRFC()?> </td>
   <td><?php echo $empleado->getEmail()?> </td>
    <td><?php echo $empleado->getNombreDepartamento()?> </td>
   <td><a href="actualizar.php">Editar</a></td>
 </tr>
 <?php }?>
  </table>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
