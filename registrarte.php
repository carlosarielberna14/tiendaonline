<?php 


$conex = mysqli_connect("localhost","root","","tienda_online"); 
if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['Contraseña']) >= 1 && strlen($_POST['Nombre']) >= 1 && strlen($_POST['Correo']) >= 1) {
		$user = trim($_POST['Usuario']);
		$pass = trim($_POST['Contraseña']);
		$nom = trim($_POST['Nombre']);
	    $email = trim($_POST['Correo']);
	    $consulta = "INSERT INTO usuario (usuario, contraseña_usuario, nombre_usuario, correo_usuario) VALUES ('$user','$pass','$nom','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}


echo"Datos Guardados Correctamente<br><a href='registrarte.html'>Regresar</a>";;
?>