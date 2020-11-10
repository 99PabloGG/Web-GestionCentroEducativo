<?php
//Clase : CENTRO_Controller
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.

//-------------------------------------------------------

	session_start(); //solicito trabajar con la session

	include '../Functions/Authentication.php';

	//Si no está autentificado, redirige al index.php
	if (!IsAuthenticated()){
		header('Location:../index.php');
	}

	include '../Model/CENTRO_Model.php';
	include '../Model/EDIFICIO_Model.php';	//es necesario incluir el model de Edificio por el CODEDIFICIO
	include '../View/CENTRO_SHOWALL_View.php';
	include '../View/CENTRO_SEARCH_View.php';
	include '../View/CENTRO_ADD_View.php';
	include '../View/CENTRO_EDIT_View.php';
	include '../View/CENTRO_DELETE_View.php';
	include '../View/CENTRO_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
function get_data_form(){

	$CODCENTRO =  $_POST['CODCENTRO']; //recojo la variable CODCENTRO
                $CODEDIFICIO =  $_POST['CODEDIFICIO'];//recojo la variable CODEDIFICIO
                $NOMBRECENTRO	 =  $_POST['NOMBRECENTRO']; //recojo la variable NOMBRECENTRO
                $DIRECCIONCENTRO =  $_POST['DIRECCIONCENTRO'];//recojo la variable DIRECCIONCENTRO
                $RESPONSABLECENTRO =  $_POST['RESPONSABLECENTRO'];//recojo la variable RESPONSABLECENTRO
               
	//creamos el modelo con los datos que recoji anteriormente y lo guardamos en la variable centro
		$CENTRO = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
		return $CENTRO;
}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

if (!isset($_REQUEST['action'])){
	$_REQUEST['action'] = '';
}

// En funcion del action realizamos las acciones necesarias

switch ($_REQUEST['action']){
	case 'ADD':
					//si no recibe datos por post 
		if (!$_POST){ // se incoca la vista de add de usuarios
			$EDIFICIO = new EDIFICIO_Model('','','','');
			$valores = $EDIFICIO->SEARCH(); //metemos en valores el edificio
			new CENTRO_ADD($valores); // se invoca la vista de add de centro
			}
				//si recibe datos procede a añadirlos
		else{
			$CENTRO = get_data_form(); //se recogen los datos del formulario
					$respuesta = $CENTRO->ADD(); //se añade el centro y se guarda la respuesta
					new MESSAGE($respuesta, '../Controller/CENTRO_Controller.php'); //genera un mensaje con la respuesta
		}
		break;
	case 'DELETE':
					//si no se envia el formulario de borrar por post

		if (!$_POST){ //nos llega el id a eliminar por get
			$CENTRO = new CENTRO_Model($_REQUEST['CODCENTRO'],'','','','');
			$valores = $CENTRO->RellenaDatos();
			new CENTRO_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
		}
		else{ // llegan los datos confirmados por post y se eliminan
			$CENTRO = get_data_form();//se recogen los datos del formulario
			$respuesta = $CENTRO->DELETE();//se elimina la tupla
			new MESSAGE($respuesta, '../Controller/CENTRO_Controller.php'); //genera un mensaje con la respuesta
		}
		break;
	case 'EDIT':
		//si nos llegan los datos por post
		if (!$_POST){ //nos llega el usuario a editar por get
			$CENTRO = new CENTRO_Model($_REQUEST['CODCENTRO'],'','','',''); // Creo el objeto
			$valores = $CENTRO->RellenaDatos(); // obtengo todos los datos de la tupla
			$EDIFICIO = new EDIFICIO_Model('','','','');//creo el modelo de edificio
			$valores2 = $EDIFICIO->SEARCH();//busco los edificios
			//si tenemos valores editamos
			if (is_array($valores))
			{
				new CENTRO_EDIT($valores,$valores2); //invoco la vista de edit con los datos precargados
			}else
			{
				new MESSAGE($valores, '../Controller/CENTRO_Controller.php'); //generamos el mensaje con los datos
			}
		}
						//si no

		else{

			$CENTRO = get_data_form(); //recojo los valores del formulario

			$respuesta = $CENTRO->EDIT(); // update en la bd en la bd
			new MESSAGE($respuesta, '../Controller/CENTRO_Controller.php'); //generamos el mensaje con la respuesta
		}
		break;
	case 'SEARCH':
					//si nos llegan los datos por post

		if (!$_POST){
			new CENTRO_SEARCH(); //invocamos la vista
		}
						//si nos llegan

		else{
			$CENTRO = get_data_form(); //recojo los valores del formulario
			$datos = $CENTRO->SEARCH();//buscamos la tupla
			$lista = array('NOMBRECENTRO','DIRECCIONCENTRO');//añadimos al array

			new CENTRO_SHOWALL($lista, $datos, '../index.php');//invoco la vista de edit con los datos precargados
		}
		break;
	case 'SHOWCURRENT':
		$CENTRO = new CENTRO_Model($_REQUEST['CODCENTRO'],'','','','');//invocamos la vista
		$valores = $CENTRO->RellenaDatos();//recojemos los datos
		new CENTRO_SHOWCURRENT($valores);//mostramos los datos
		break;

	//SHOWALL	
	default:
		//si no nos llegan los datos por post
		if (!$_POST){
			$CENTRO = new CENTRO_Model('','','','','');//creamos el objeto
		}
				//si nos llegan
		else{
			$CENTRO = get_data_form(); //recojo los valores del formulario
		}
		$datos = $CENTRO->SEARCH();//buscamos el centro
		$lista = array('NOMBRECENTRO','DIRECCIONCENTRO');//guardamos los datos en la variable lista
		new CENTRO_SHOWALL($lista, $datos);//mostramos los datos
}

?>