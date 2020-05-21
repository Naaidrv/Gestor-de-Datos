<?php
require_once("crud_departamento.php");
require_once("departamento.php");

$crudDepartamento = new CrudDepartamento();
$departamento = new Departamento();
$departamento = $crudDepartamento->obtenerDepartamento($_GET['idDepartamento']);
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Actualizar Departamento</title>
  </head>
  <body>
    <div class="container">
      <div class="col-sm-8"><h2>Actualizar Departamento</h2></div>
      <form class="" action="administrar_departamento.php" method="post">
        <input type="hidden" name="idDepartamento" value="<?php echo $departamento->getIdDepartamento()?>">
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $departamento->getNombre()?>">
        <label for="">ID jefe</label>
        <input type="text" name="id_jefe_area" value="<?php echo $departamento->getIdJefeArea()?>">
        <input type="hidden" name="actualizar" value="actualizar">
        <input type="submit" class="btn btn-primary" value="Guardar">
        <a type="button" class="btn btn-primary" href="agregar_departamentos.php">Volver</a>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
