<?php
//Clase : CENTRO_Controller
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------
session_start();
//incluir funcion autenticacion
include '../Functions/Authentication.php';
//si no esta autenticado
if (!IsAuthenticated()){
	header('Location: ../index.php');
}
//esta autenticado
else{
	include '../View/users_index_View.php';
	new Index();
}

?>