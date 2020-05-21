<?php

require_once("../db/conexion.php");


  class CrudDepartamento
  {

    function __construct()
    {}

    public function insertar($departamento){
      $con=BaseDatos::conectar();

      $insertar=$con->prepare('INSERT INTO depar(nombre,id_jefe_area)
      VALUES(:nombre,:id_jefe_area)');
      $insertar->bindValue('nombre',$departamento->getNombre());
      $insertar->bindValue('id_jefe_area',$departamento->getIdJefeArea());
      $insertar->execute();
    }

    public function mostrar(){
        $con=BaseDatos::conectar();
        $listaDepartamentos=[];
        $select=$con->query('SELECT * FROM depar');

        foreach ($select->fetchAll() as $departamento) {
          $area = new Departamento();
          $area->setIdDepartamento($departamento['idDepartamento']);
          $area->setNombre($departamento['nombre']);
          $area->setIdJefeArea($departamento['id_jefe_area']);
          $listaDepartamentos[]=$area;
        }
        return $listaDepartamentos;
    }

    // método para buscar un libro, recibe como parámetro el id del libro
    public function obtenerDepartamento($idDepartamento){
      $con=BaseDatos::conectar();
      $select=$con->prepare('SELECT * FROM depar WHERE idDepartamento = idDepartamento');
      $select->bindValue('idDepartamento',$idDepartamento);
      $select->execute();
      $departamento=$select->fetch();
      $departamentoN = new Departamento();
      $departamentoN->setIdDepartamento($departamento['idDepartamento']);
      $departamentoN->setNombre($departamento['nombre']);
      $departamentoN->setIdJefeArea($departamento['id_jefe_area']);
      //$departamentoN->setCreateDate($departamento['create_date']);
      return $departamentoN;
    }

    public function actualizarDepartamento($departamento){
      $con=BaseDatos::conectar();
      $actualizar=$con->prepare('UPDATE depar SET nombre=:nombre,id_jefe_area=:id_jefe_area WHERE id=idDepartamento');
        $actualizar->bindValue('idDepartamento',$departamento->getIdDepartamento());
        $actualizar->bindValue('nombre',$departamento->getNombre());
        $actualizar->bindValue('id_jefe_area',$departamento->getIdJefeArea());
        //$actualizar->bindValue('create_date',$departamento->getCreateDate());
        $actualizar->execute();
    }
}
 ?>
