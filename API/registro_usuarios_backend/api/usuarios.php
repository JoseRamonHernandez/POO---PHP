<?php
//localhost:8000/..../api/usuarios.php
//echo 'Informacion: ' . file_get_contents('php://input');
echo "Metodo HTTP: " . $_SERVER['REQUEST_METHOD'];
//Recibir peticiones del usuario
switch($_SERVER['REQUEST_METHOD']){
    case 'POST':
        $_POST = json_decode( file_get_contents('php://input'),true);
        echo " -- Guardar usuario, informacion: " . json_encode($_POST);
    break;
    case 'GET':
       if(isset{$_GET['id']}){
        echo " -- Retornar el usuario con el id: " . $_GET['id'];
       }
       else
    break;
    case 'PUT':
        $_PUT = json_decode( file_get_contents('php://input'),true);
        echo " -- Actualizar un Usiario";
    break;
    case 'DELETE':
        echo " -- Eliminar un Usuario";
    break;
}

?>