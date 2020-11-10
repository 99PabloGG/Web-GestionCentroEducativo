<?php
//Clase : Register_Controller
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------

session_start();

//session_start();
//si no se pasa el login correctamente invocamos la vista para registrarse

if(!isset($_POST['login'])){
	include '../View/Register_View.php';
	$register = new Register();
}
//si se pasa correctamente se crea un modelo con los datos previamente cargados
else{
		
	include '../Model/USUARIOS_Model.php';
	if(isset($_FILES['fotopersonal']['name'])){
                    $nombreFoto = $_FILES['fotopersonal']['name'];
                }else{
                    $nombreFoto = null;
                }
                if(isset($_FILES['fotopersonal']['type'])){
                    $tipoFoto = $_FILES['fotopersonal']['type'];
                }else{
                    $tipoFoto = null;
                }
                if(isset($_FILES['fotopersonal']['tmp_name'])){
                    $nombreTempFoto = $_FILES['fotopersonal']['tmp_name'];
                }else{
                    $nombreTempFoto = null;
                }
                if(isset($_FILES['fotopersonal']['size'])){
                    $tamanhoFoto = $_FILES['fotopersonal']['size']; 
                }else{
                    $tamanhoFoto = null;
                }
                        

                if($nombreFoto != null){

                    $dir_subida = '../Files/';
                    $extension = substr($tipoFoto, 6);
                    $fotopersonal = $dir_subida . $_REQUEST['DNI'] . ".". $extension;
                    move_uploaded_file($nombreTempFoto, $fotopersonal);
                    
                }else{
                    if(isset($_POST['imagen'])){
                        $fotopersonal=$_POST['imagen'];
                    }else{

                    $fotopersonal=null;
                }
                }
	$usuario = new USUARIOS_Model($_REQUEST['login'],$_REQUEST['password'],$_REQUEST['DNI'],$_REQUEST['nombre'],
		$_REQUEST['apellidos'],$_REQUEST['telefono'],$_REQUEST['email'],$_REQUEST['FechaNacimiento'],
		$fotopersonal,$_REQUEST['sexo']);
	$respuesta = $usuario->Register();
	//si todo está correcto se registra y se manda mensaje de éxito

	if ($respuesta == 'true'){
		$respuesta = $usuario->registrar();
		Include '../View/MESSAGE_View.php';
		new MESSAGE($respuesta, './Login_Controller.php');
	}
	else{	//si algo falla manda mensaje de error
		include '../View/MESSAGE_View.php';
		new MESSAGE($respuesta, './Login_Controller.php');
	}

}

?>

