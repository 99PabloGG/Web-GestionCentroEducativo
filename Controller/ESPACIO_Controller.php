<?php
//Clase : ESPACIO_Controller
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------

	session_start(); //solicito trabajar con la session

	include '../Functions/Authentication.php';

	//Si no está autentificado, redirige al index.php
	if (!IsAuthenticated()){
		header('Location:../index.php');
	}

	include '../Model/ESPACIO_Model.php';
	include '../Model/EDIFICIO_Model.php';
	include '../Model/CENTRO_Model.php';		//es necesario incluir el model de Centro
	include '../View/ESPACIO_SHOWALL_View.php';
	include '../View/ESPACIO_SEARCH_View.php';
	include '../View/ESPACIO_ADD_View.php';
	include '../View/ESPACIO_EDIT_View.php';
	include '../View/ESPACIO_DELETE_View.php';
	include '../View/ESPACIO_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
	function get_data_form(){

             	$CODESPACIO =  $_POST['CODESPACIO']; //recojo la variable CODESPACIO
                $CODEDIFICIO =  $_POST['CODEDIFICIO'];//recojo la variable CODEDIFICIO
                $CODCENTRO	 =  $_POST['CODCENTRO'];//recojo la variable CODCENTRO
                $TIPO =  $_POST['TIPO'];//recojo la variable TIPO
                $SUPERFICIEESPACIO =  $_POST['SUPERFICIEESPACIO'];//recojo la variable SUPERFICIEESPACIO
				$NUMINVENTARIOESPACIO = $_POST['NUMINVENTARIOESPACIO'];//recojo la variable SUPERFICIEESPACIO
               

		//creamos el modelo con los datos que recojimos anteriormente y lo guardamos en la variable espacio
		$ESPACIO = new ESPACIO_Model($CODESPACIO,$CODEDIFICIO,$CODCENTRO,$TIPO,$SUPERFICIEESPACIO,$NUMINVENTARIOESPACIO);
		return $ESPACIO;
	}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

	if (!isset($_REQUEST['action'])){
		$_REQUEST['action'] = '';
	}

// En funcion del action realizamos las acciones necesarias

		switch ($_REQUEST['action']){
			case 'ADD'://si no recibimos los datos por post
				if (!$_POST){ // se incoca la vista de add de usuarios
					$EDIFICIO = new EDIFICIO_Model('','','',''); //creamos el objeto
					$valores1 = $EDIFICIO->SEARCH(); //buscamos el edificio y lo guardamos en valores1
					$CENTRO = new CENTRO_Model('','','','',''); //creamos el objeto
					$valores2 = $CENTRO->SEARCH(); //buscamos el centro y lo guardamos en valores2
					new ESPACIO_ADD($valores1,$valores2); //añadimos el espacio
				}
				//si recibimos los datos por post

				else{
					$ESPACIO = get_data_form(); //se recogen los datos del formulario
					$respuesta = $ESPACIO->ADD();
					new MESSAGE($respuesta, '../Controller/ESPACIO_Controller.php');
				}
				break;
			case 'DELETE':
				//si no recibimos los datos por post
				if (!$_POST){ //nos llega el id a eliminar por get
					$ESPACIO = new ESPACIO_Model($_REQUEST['CODESPACIO'],'','','','','');
					$valores = $ESPACIO->RellenaDatos();
					new ESPACIO_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
				}
				else{ // llegan los datos confirmados por post y se eliminan
					$ESPACIO = get_data_form();//se recogen los datos del formulario
					$respuesta = $ESPACIO->DELETE();//se eliminan
					new MESSAGE($respuesta, '../Controller/ESPACIO_Controller.php'); //se genera un mensaje con la respuesta 
				}
				break;
			case 'EDIT':				//si no recibimos los datos por pos

				if (!$_POST){ //nos llega el usuario a editar por get
					
					$ESPACIO = new ESPACIO_Model($_REQUEST['CODESPACIO'],'','','','',''); // Creo el objeto
					$valores = $ESPACIO->RellenaDatos(); // obtengo todos los datos de la tupla
					$EDIFICIO = new EDIFICIO_Model('','','','');//Creo el objeto
					$valores1 = $EDIFICIO->SEARCH();//busco el edificio
					$CENTRO = new CENTRO_Model('','','','','');//Creo el objeto
					$valores2 = $CENTRO->SEARCH(); //busco el centro
					//si hay valores
					if (is_array($valores))
					{
						new ESPACIO_EDIT($valores,$valores1,$valores2); //invoco la vista de edit con los datos 
							//precargados
					}else //si no hay valores	
					{
						new MESSAGE($valores, '../Controller/ESPACIO_Controller.php');//se genera un mensaje con la respuesta 
					}
				}
				//si recibimos los datos por pos
				else{

					$ESPACIO = get_data_form(); //recojo los valores del formulario

					$respuesta = $ESPACIO->EDIT(); // update en la bd en la bd
					new MESSAGE($respuesta, '../Controller/ESPACIO_Controller.php');//se genera un mensaje con la respuesta 
				}

				break;
			case 'SEARCH':
				//si no nos llegan los datos por post
				if (!$_POST){//nos llega el usuario a editar por get
					new ESPACIO_SEARCH();//invoca la busqueda
				}
				//si nos llegan los datos por port
				else{
					
					$ESPACIO = get_data_form(); //recojo los valores del formulario
					$datos = $ESPACIO->SEARCH();//buscamos los datos  

					$lista = array('CODESPACIO','CODEDIFICIO','CODCENTRO'); //guardamos los datos

					new ESPACIO_SHOWALL($lista, $datos, '../index.php'); //invoco la vista de edit con los datos precargados
				}
				break;
			case 'SHOWCURRENT':
				$ESPACIO = new ESPACIO_Model($_REQUEST['CODESPACIO'],'','','','',''); //invocamos los datos
				$valores = $ESPACIO->RellenaDatos();//obtenemos los datos
				new ESPACIO_SHOWCURRENT($valores);//mostramos los datos
				break;
			default: 			//SHOWALL
							//si no nos llegan los datos por post
				if (!$_POST){
					$ESPACIO = new ESPACIO_Model('','','','','','');
				}
								//si nos llegan los datos por post
				else{
					$ESPACIO = get_data_form();
				}
				$datos = $ESPACIO->SEARCH(); //buscamos los datos
				$lista = array('CODESPACIO','CODEDIFICIO','CODCENTRO'); //guardamos los datos en la variable lista
				new ESPACIO_SHOWALL($lista, $datos);//mostramos la vista con los datos
		}

?>