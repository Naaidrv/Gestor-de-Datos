<?php
require_once("crud_departamento.php");
require_once("departamento.php");

$crud = new CrudDepartamento();
$departamento = new Departamento();


//si el elemento no viene nulo llama al crud para insertar
if(isset($_POST['insertar'])){
  $departamento->setNombre($_POST['nombre']);
  //$departamento->setNumEmpleados($_POST['numEmpleados']);
  $departamento->setIdJefeArea($_POST['jefe']);

  $crud->insertar($departamento);
  header('location:agregar_departamentos.php');

}elseif(isset($_POST['actualizar'])){
  $departamento->setIdDepartamento($_POST['idDepartamento']);
  $departamento->setNombre($_POST['nombre']);
  $departamento->setIdJefeArea($_POST['id_jefe_area']);
}elseif ($_GET['accion']=='a') {
  header('location: actualizar_depar.php');
}
 ?>
