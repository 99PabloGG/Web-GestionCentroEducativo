<?php
//Clase : CENTRO_Controller
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------
session_start();
//si no existe el login lo creamos

if(!isset($_REQUEST['login']) && !(isset($_REQUEST['password']))){
	include '../View/Login_View.php';
	$login = new Login();
}
else{

	include '../Model/Access_DB.php';
	
	include '../Model/USUARIOS_Model.php';
	$usuario = new USUARIOS_Model($_REQUEST['login'],$_REQUEST['password'],'','','','','','','','');
	$respuesta = $usuario->login();
	//si es correcto concede acceso	

	if ($respuesta == 'true'){
		session_start();
		$_SESSION['login'] = $_REQUEST['login'];
		header('Location:../index.php');
	}
	//si no es correcto devuelve un mensaje de respuesta
	else{
		include '../View/MESSAGE_View.php';
		new MESSAGE($respuesta, './Login_Controller.php');
	}

}

?>

