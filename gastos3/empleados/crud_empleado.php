<?php
  require_once("../db/conexion.php");

  class CrudEmpleado{
    function __construct(){}

    public function insertar($empleado){
        $con=BaseDatos::conectar();
        $insertar=$con->prepare('INSERT INTO empleados(Nombre,Apellido_Pat,Apellido_Mat,Email,RFC,id_departamento,user,password)
        VALUES(:Nombre,:Apellido_Pat,:Apellido_Mat,:Email,:RFC, :id_departamento,:user,:password)');
        $insertar->bindValue('Nombre',$empleado->getNombre());
        $insertar->bindValue('Apellido_Mat',$empleado->getApellidoP());
        $insertar->bindValue('Apellido_Pat',$empleado->getApellidoM());
        $insertar->bindValue('Email',$empleado->getEmail());
        $insertar->bindValue('RFC',$empleado->getRFC());
        $insertar->bindValue('id_departamento',$empleado->getDepartamento());
        $insertar->bindValue('user',$empleado->getUsuarioN());
        $insertar->bindValue('password',$empleado->getPass());
        //$insertar->bindValue('isJefe',$empleado->getIsJefe());
        //$insertar->bindValue('fecha_alta',$empleado->getFechaAlta());
        $insertar->execute();
    }

    public function mostrar(){
        $con=BaseDatos::conectar();
        $listaEmpleados=[];
        $select=$con->query('SELECT e.*,  d.nombre
                            FROM empleados e
                            INNER JOIN depar d
                            ON e.id_departamento = d.idDepartamento');

        foreach ($select->fetchAll() as $empleado) {
          $area = new Empleado();
          $area->setIdEmpleado($empleado['id_empleado']);
          $area->setNombre($empleado['Nombre']);
          $area->setApellidoP($empleado['Apellido_Pat']);
          $area->setApellidoM($empleado['Apellido_Mat']);
          $area->setDepartamento($empleado['id_departamento']);
          $area->setRFC($empleado['RFC']);
          $area->setEmail($empleado['Email']);
          $area->setNombreDepartamento($empleado['nombre']);
          $listaEmpleados[]=$area;
        }
        return $listaEmpleados;
    }
  }
 ?>
