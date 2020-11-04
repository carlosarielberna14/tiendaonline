<?php
    class Conexion{
        var $conn;

        function conectar(){
            $conn = null;
            try{
                $conn = new PDO('msql:host=localhost;dbname=tiendaonline',
                               'root',
                               '');
       
                $conn->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
                echo 'Conectado a la base de datos <br><br>';
        
            }

            catch(PDOException $e){
                die('Error conectado con la base de datos: '
                . $e->getMessage());
            }
            return $conn;
    }

    function buscarUsuario($user, $pass){
        $con = $this->conectar();

        $stmt = $con->prepare('SELECT nombre FROM usuario WHERE usuario=:usuario AND contraseña=pass');
        $stmt->binParam(':usuario', $user, PDO::PARAM_STR);
        $stmt->binParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();
        //$stmt->execute(array(':usuario'=>$user));

        $registro = $stmt->fetchALL(PDO::FETCH_ASSOC);
        $numRegistros = count($registro);

        return $numRegistros;
    }
}
?>