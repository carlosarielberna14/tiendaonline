<?php

include('conexion.php');
$obj = new Conexion;
$usuario=$_POST['inputUser'];
$pass=$_POST['inputPassword'];
//$texto ="Nombre :".$usuario."Contraseña : ".$pass;

$res = $obj->buscarUsuario($usuario, $pass);

if($res ==1){
    $datos=array('datos'=> 'ok');
}else{
    $datos=array('datos'=> 'no');
}

//$datos=array('datos'=>$texto);
echo json_encode($datos,JSON_FORCE_OBJECT);
?>

