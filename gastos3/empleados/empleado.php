<?php
class Empleado
{
  private $id_empleado;
  private $nombre;
  private $nombreDepartamento;
  private $apellidoPaterno;
  private $apellidoMaterno;
  private $email;
  private $rfc;
  private $departamento;
  private $usuario;
  private $contraseña;
  private $isJefe;
  private $fecha_alta;

  function __construct()
  {
  }

  public function getNombre(){
    return $this->Nombre;
  }
  public function setNombre($nombre){
    $this->Nombre = $nombre;
  }
  public function getNombreDepartamento(){
    return $this->NombreDepartamento;
  }
  public function setNombreDepartamento($nombreDepartamento){
    $this->NombreDepartamento = $nombreDepartamento;
  }
  public function getApellidoP(){
    return $this->Apellido_Pat;
  }
  public function setApellidoP($apellidoPaterno){
    $this->Apellido_Pat = $apellidoPaterno;
  }
  public function getApellidoM(){
    return $this->Apellido_Mat;
  }
  public function setApellidoM($apellidoMaterno){
    $this->Apellido_Mat = $apellidoMaterno;
  }
  public function getEmail(){
    return $this->Email;
  }
  public function setEmail($email){
    $this->Email = $email;
  }
  public function getRFC(){
    return $this->RFC;
  }
  public function setRFC($rfc){
    $this->RFC = $rfc;
  }
  public function getDepartamento(){
    return $this->id_departamento;
  }
  public function setDepartamento($departamento){
    $this->id_departamento = $departamento;
  }
  public function getUsuarioN(){
    return $this->user;
  }
  public function setUsuarioN($usuario){
    $this->user = $usuario;
  }
  public function getPass(){
    return $this->password;
  }
  public function setPass($contraseña){
    $this->password = $contraseña;
  }
  public function getIsJefe(){
    return $this->isJefe;
  }
  public function setIsJefe($isJefe){
    $this->isJefe = $isJefe;
  }
  public function getFechaAlta(){
    return $this->fecha_alta;
  }
  public function setFechaAlta($fecha_alta){
    $this->fecha_alta = $fecha_alta;
  }
  public function getIdEmpleado(){
    return $this->id_empleado;
  }
  public function setIdEmpleado($id_empleado){
    $this->id_empleado = $id_empleado;
  }
}
 ?>
