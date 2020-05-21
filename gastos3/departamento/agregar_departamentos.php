<?php
require_once("departamento.php");
require_once("crud_departamento.php");
require_once("../empleados/crud_empleado.php");
require_once("../empleados/empleado.php");

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

    <title>Departamentos</title>
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
            <a class="nav-link" href="#">Departamentos</a>
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
       <div class="col-sm-8"><h2>Agregar departamento</h2></div>
       <form class="" action="administrar_departamento.php" method="post">
         <div class="row">
           <div class="col">
             <label for="">Nombre del departamento</label>
             <input type="text" class="form-control" name="nombre" required>
           </div>
           <div class="col">
             <label for="">Jefe de departamento</label>
             <select class="custom-select my-1 mr-sm-2" id="jefe" name="jefe">
               <option selected>Jefe de área</option>
               <?php

               foreach ($listaEmpleados as $empleado) {?>
                       <option value=".<?php echo $empleado->getIdEmpleado() ?>.">
                         <?php echo $empleado->getNombre() ?>
                       </option>
                       <?php }?>
             </select>
           </div>
           <input type="hidden" name="insertar" value="insertar"><!--se lo utiliza como una bandera, para determinar si debe ingresar al código de ingresar en el archivo administrar_departamento.php-->
         </div><br>
         <button type="submit" class="btn btn-primary">Agregar</button>
       </form><br><br>

       <table class="table table-bordered">
       	<tr>
           <th><strong>ID Departamento</strong></th>
       		<th><strong>Nombre</strong></th>
           <th><strong>Jefe Área</strong></th>
           <th><strong>Fecha creación</strong></th>
           <th><strong>Actualizar</strong></th>
       	</tr>
        <?php foreach ($listaDepartamentos as $departamento) {?>
 			<tr>
 				<td><?php echo $departamento->getIdDepartamento() ?></td>
 				<td><?php echo $departamento->getNombre() ?></td>
        <td><?php echo $departamento->getIdJefeArea()?> </td>
        <td><?php echo $departamento->getCreateDate()?> </td>
        <td><a class="btn btn-primary" href="actualizar_depar.php?idDepartamento=<?php echo $departamento->getIdDepartamento()?>&accion=a">Editar</a></td>
 			</tr>
 			<?php }?>
       </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
