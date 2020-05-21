<?php
//Nombre,Apellido_pat,Apellido_Mat,Email,RFC,id_departamento,fecha_alta,user,password
//:Nombre,:Apellido_pat,:Apellido_Mat,:Email,:RFC,:id_departamento,:fecha_alta,:user,:password

require_once("crud_empleado.php");
require_once("empleado.php");

$crud = new CrudEmpleado();
$empleado = new Empleado();

if(isset($_POST['insertar'])){
  $empleado->setNombreE($_POST['nombre']);
  $empleado->setApellidoP($_POST['apellidoP']);
  $empleado->setApellidoM($_POST['apellidoM']);
  $empleado->setEmail($_POST['email']);
  $empleado->setRFC($_POST['rfc']);
  $empleado->setDepartamento($_POST['departamento']);
  //$empleado->setIsJefe($_POST['jefe']);
  $empleado->setUsuarioN($_POST['usuario']);
  $empleado->setPass($_POST['pass']);

  $crud->insertar($empleado);
  header('location:agregar_empleados.php');
}

 ?>
