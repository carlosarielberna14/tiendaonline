<?php
     try{
         $con = new PDO('msql:host=localhost;dbname=tiendaonline',
                        'root',
                        '');

         $con->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         echo 'Conectado a la base de datos <br><br>';
/* 
*
*  Esta parte busca tofos los registros de la tabla
*  y regresa solo los nombres
*
*/
/*
         $stmt = $con->prepare('SELECT nombre FROM usuario');
         $stmt->execute();

         while $datos = $stmt->fetch() ){
             echo 'Nombre: ' . $datos[0] . '<br>'
         }
  */


  //Regresa el registro deñ usuario Juan
  $user = 'Juan';
  $pass = 'bbbbb';
  $nombre = 'Lebron James';
  $correo = 'lebronjames@gmail.com';

  //$stmt = $con->prepare('SELECT nombre, correo_e FROM usuario WHERE usuario=:usuario');
  //$stmt->binParam(':usuario', $user, PDO::PARAM_STR);
  //$stmt->execute();
  //$stmt->execute(array(':usuario'=>$user));

  /*while $datos = $stmt->fetch() ){
    echo 'Nombre: ' . $datos[0] . '<br>', 'Correo: ' . $datos[1]
}*/
//Insercion de un registro
/*$stmt = $con->prepare('INSERT INTO usuario (usuario, contraseña, nombre, correo_e)
VALUES (:user, :pass, :nom, :mail');
$rows = $stmt->execute(array(':user'=>$user,
                              ':pass'=>$pass,
                              ':nom'=>$nombre,
                              ':mail'=>$correo));
if($rows == 1){
    echo 'Inserción correcta';
}*/
/*// Modificzcion de un registro
$stmt = $con->prepare('UPDATE usuario SET usuario=:user WHERE nombre=:nom');
$rows = $stmt->execute(array(':user'=>$user,
                              ':nom'=>$nombre));

if($rows > 0){
    echo 'Modificación correcta';
}*/
  //Borrado de un registro
  $stmt = $con->prepare('DELETE FROM usuario WHERE usuario=:user');
  $rows = $stmt->execute(array(':user'=>$user));

  if($rows > 0){
    echo 'Borrado correcto';
  }
}

     catch(PDOException $e){
         die('Error conectado con la base de datos: '
         . $e->getMessage());
     }
?>