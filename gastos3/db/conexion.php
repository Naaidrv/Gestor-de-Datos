<?php
require_once("global.php");

/*$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_query($conexion, 'SET NAMES "'.DB_ENCODE.'"');

if (mysqli_connect_errno()) {
    printf("Fallo la conexion a la base de datos: %\n", mysqli_connect_errno());
    exit();
}
echo "string";*/

class BaseDatos{
		private static $conexion=NULL;
		private $con;
		private function __construct (){}

		public static function conectar(){ //Se crea una función estática con la finalidad de que se pueda acceder sin la necesidad de crear un objeto
			//array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			$pdo_opciones[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=prueba_gastos','root','',$pdo_opciones);

			return self::$conexion;
		}
	}
 ?>
