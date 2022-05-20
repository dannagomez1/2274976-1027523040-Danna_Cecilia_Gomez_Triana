<?php

$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasenia="";

try{

$conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasenia );
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "conexion establecida";

$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'conexion estable', 'foto.jpg');";
   
$conexion->exec($sql);

}catch(\PDOException $error) {
echo "conexion erronea".$error;
}

?> 