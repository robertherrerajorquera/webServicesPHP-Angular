<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requestes-Whit, Content-Type, Accept');

$json = file_get_contents('php://input');
$params = json_decode($json);
require("./conexion.php");
$con = returnConection();

mysqli_query($con ,"update usuarios set nombre='$params->nombre',
apellido='$params->apellido',
correo='$params->correo',
numero=$params->numero,
clave='$params->clave'
where id_usuario=$params->id_usuario");

class Result{}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = 'usuario modificado';


header('Content-Type: application/json');
echo json_encode($response);
