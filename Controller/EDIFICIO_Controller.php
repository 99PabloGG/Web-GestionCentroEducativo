<?php
//Clase : EDIFICIO_Controller
//Creado el : 29-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------

	session_start(); //solicito trabajar con la session

	include '../Functions/Authentication.php';

	//Si no está autentificado, redirige al index.php
	if (!IsAuthenticated()){
		header('Location:../index.php');
	}

	include '../Model/EDIFICIO_Model.php';
	include '../Model/CENTRO_Model.php';		//es necesario incluir el model de Centro
	include '../View/EDIFICIO_SHOWALL_View.php';
	include '../View/EDIFICIO_SEARCH_View.php';
	include '../View/EDIFICIO_ADD_View.php';
	include '../View/EDIFICIO_EDIT_View.php';
	include '../View/EDIFICIO_DELETE_View.php';
	include '../View/EDIFICIO_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
function get_data_form(){
    $CODEDIFICIO =  $_POST['CODEDIFICIO']; //recojo la variable CODEDIFICIO
    $NOMBREEDIFICIO =  $_POST['NOMBREEDIFICIO'];//recojo la variable NOMBREEDIFICIO
    $DIRECCIONEDIFICIO	 =  $_POST['DIRECCIONEDIFICIO'];//recojo la variable DIRECCIONEDIFICIO
    $CAMPUSEDIFICIO =  $_POST['CAMPUSEDIFICIO'];//recojo la variable CAMPUSEDIFICIO

//creo el modelo con los datos que recoji anteriormente y lao guardamos en la variable edificio
	$EDIFICIO = new EDIFICIO_Model($CODEDIFICIO,$NOMBREEDIFICIO,$DIRECCIONEDIFICIO,$CAMPUSEDIFICIO);
	return $EDIFICIO;
}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

// En funcion del action realizamos las acciones necesarias

if (!isset($_REQUEST['action'])){
	$_REQUEST['action'] = '';
}

// En funcion del action realizamos las acciones necesarias

switch ($_REQUEST['action']){
	case 'ADD':
				//si no recibe datos por post 
		if (!$_POST){ // se incoca la vista de add de usuarios
			new EDIFICIO_ADD();
		}
		else{
			$EDIFICIO = get_data_form(); //se recogen los datos del formulario
			$respuesta = $EDIFICIO->ADD();//se añade el edificio y se guarda la respuesta
			new MESSAGE($respuesta, '../Controller/EDIFICIO_Controller.php');//genera un mensaje con la respuesta
		}
		break;
	case 'DELETE':
					//si no se envia el formulario de borrar, abre la vista
		if (!$_POST){ //nos llega el id a eliminar por get
			$EDIFICIO = new EDIFICIO_Model($_REQUEST['CODEDIFICIO'],'','',''); // se invoca la vista delete de edificio
			$valores = $EDIFICIO->RellenaDatos();
			new EDIFICIO_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
		}
		else{ // llegan los datos confirmados por post y se eliminan
			$EDIFICIO = get_data_form();
			$respuesta = $EDIFICIO->DELETE();
			new MESSAGE($respuesta, '../Controller/EDIFICIO_Controller.php'); //genera el mensaje con la respuesta
		}
		break;
	case 'EDIT':
		if (!$_POST){ //nos llega el usuario a editar por get
			$EDIFICIO = new EDIFICIO_Model($_REQUEST['CODEDIFICIO'],'','',''); // Creo el objeto
			$valores = $EDIFICIO->RellenaDatos(); // obtengo todos los datos de la tupla
			if (is_array($valores))
			{
				new EDIFICIO_EDIT($valores); //invoco la vista de edit con los datos 
							//precargados
			}else
			{
				new MESSAGE($valores, '../Controller/EDIFICIO_Controller.php'); //genera el mensaje con la respuesta
			}
		}
		else{

			$EDIFICIO = get_data_form(); //recojo los valores del formulario
			$respuesta = $EDIFICIO->EDIT(); // update en la bd en la bd
			new MESSAGE($respuesta, '../Controller/EDIFICIO_Controller.php'); //genera el mensaje con la respuesta
		}

		break;
	case 'SEARCH':
		if (!$_POST){
			new EDIFICIO_SEARCH();
		}
		else{
			$EDIFICIO = get_data_form(); //recojo los valores del formulario
					$datos = $EDIFICIO->SEARCH();//buscamos la tupla del edificio
			$lista = array('NOMBREEDIFICIO','DIRECCIONEDIFICIO'); //guardamos los datos

					new EDIFICIO_SHOWALL($lista, $datos, '../index.php'); //mostramos los datos
		}
		break;
	case 'SHOWCURRENT':
		$EDIFICIO = new EDIFICIO_Model($_REQUEST['CODEDIFICIO'],'','','');
		$valores = $EDIFICIO->RellenaDatos();
		new EDIFICIO_SHOWCURRENT($valores);
		break;
	default:
		//si no nos llegan los datos por post
		if (!$_POST){ //nos llega el usuario a editar por get
			$EDIFICIO = new EDIFICIO_Model('','','','');
		}//creamos el objeto
		else{
			$EDIFICIO = get_data_form(); //recojo los valores del formulario
		}
		$datos = $EDIFICIO->SEARCH();  //invoco la vista
		$lista = array('NOMBREEDIFICIO','DIRECCIONEDIFICIO'); 			//guardamos los datos
		new EDIFICIO_SHOWALL($lista, $datos); //mostramos los datos
}

?>