<?php

  class Departamento
  {
    private $idDepartamento;
    private $nombre;
    private $num_empleados;
    private $id_jefe_area;
    private $create_date;
    private $isActive;

    function __construct()
    {}

      public function getNombre(){
        return $this->nombre;
      }
      public function setNombre($nombre){
        $this->nombre = $nombre;
      }
      public function getNumEmpleados(){
        return $this->num_empleados;
      }
      public function setNumEmpleados($num_empleados){
        $this->num_empleados = $num_empleados;
      }
      public function getIdJefeArea(){
        return $this->id_jefe_area;
      }
      public function setIdJefeArea($id_jefe_area){
        $this->id_jefe_area = $id_jefe_area;
      }
      public function getCreateDate(){
        return $this->create_date;
      }
      public function setCreateDate(){
        $this->create_date = $create_date;
      }
      public function getIdDepartamento(){
        return $this->idDepartamento;
      }
      public function setIdDepartamento($idDepartamento){
        $this->idDepartamento = $idDepartamento;
      }
  }

 ?>
