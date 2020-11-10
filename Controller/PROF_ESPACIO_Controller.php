<?php
//Clase : PROF_ESPACIO_Controller
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

	include '../Model/PROF_ESPACIO_Model.php';
	include '../Model/ESPACIO_Model.php';		//es necesario incluir el model de Espacio
	include '../Model/PROFESOR_Model.php';		//es necesario incluir el model de Profesor
	include '../View/PROF_ESPACIO_SHOWALL_View.php';
	include '../View/PROF_ESPACIO_SEARCH_View.php';
	include '../View/PROF_ESPACIO_ADD_View.php';
	include '../View/PROF_ESPACIO_EDIT_View.php';
	include '../View/PROF_ESPACIO_DELETE_View.php';
	include '../View/PROF_ESPACIO_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';


// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
	function get_data_form(){

                $DNI =  $_POST['DNI'];
                $CODESPACIO =  $_POST['CODESPACIO'];
		//creamos el modelo con los datos que recojimos anteriormente y lo guardamos en la variable prof_espacio
		
		$PROF_ESPACIO = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
		return $PROF_ESPACIO;
	}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

	if (!isset($_REQUEST['action'])){
		$_REQUEST['action'] = '';
	}

// En funcion del action realizamos las acciones necesarias

		switch ($_REQUEST['action']){
			case 'ADD':
				if (!$_POST){ // se incoca la vista de add de usuarios
					$ESPACIO= new ESPACIO_Model('','','','','','');//se crea el objeto espacio
					$valores1= $ESPACIO->SEARCH();//se busca
					
					$PROFESOR= new PROFESOR_Model('','','','','');//creamos el objeto porfesor
					$valores2= $PROFESOR->SEARCH();//se busca

					$PROF_ESPACIO= new PROF_ESPACIO_Model('','');//añadimos los valores que previamente buscamos
					
					$valores3= $PROF_ESPACIO->SEARCH();
					new PROF_ESPACIO_ADD($valores1,$valores2,$valores3);//añadimos los valores que previamente buscamos
				}
				else{//si nos llega por post
					$PROF_ESPACIO = get_data_form(); //se recogen los datos del formulario
					$respuesta = $PROF_ESPACIO->ADD();//se añaden los datos y se recogen en la variable respuesta
					new MESSAGE($respuesta, '../Controller/PROF_ESPACIO_Controller.php'); //se genera un mensaje con la respuesta
				}
				break;
			case 'DELETE'://si no nos llegan los datos por post
				if (!$_POST){ //nos llega el id a eliminar por get
					$PROF_ESPACIO = new PROF_ESPACIO_Model($_REQUEST['DNI'],$_REQUEST['CODESPACIO']);
					$valores = $PROF_ESPACIO->RellenaDatos();
					new PROF_ESPACIO_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
				}
				//si nos llegan los datos por post
				else{ // llegan los datos confirmados por post y se eliminan
					$PROF_ESPACIO = get_data_form();
					$respuesta = $PROF_ESPACIO->DELETE();
					new MESSAGE($respuesta, '../Controller/PROF_ESPACIO_Controller.php');
				}
				break;
			case 'EDIT':
			//si no nos llegan los datos por post
				if (!$_POST){ //nos llega el usuario a editar por get
					$PROF_ESPACIO = new PROF_ESPACIO_Model($_REQUEST['DNI'],$_REQUEST['CODESPACIO']); // Creo el objeto
					$valores = $PROF_ESPACIO->RellenaDatos(); // obtengo todos los datos de la tupla
					
					//si hay valores
					if (is_array($valores))
					{
						new PROF_ESPACIO_EDIT($valores); //invoco la vista de edit con los datos 
							//precargados
					}else
					{
						new MESSAGE($valores, '../Controller/PROF_ESPACIO_Controller.php');//se genera un mensaje con la respuesta
					}
				}
				else{

					$PROF_ESPACIO = get_data_form(); //recojo los valores del formulario

					$respuesta = $PROF_ESPACIO->EDIT(); // update en la bd en la bd
					new MESSAGE($respuesta, '../Controller/PROF_ESPACIO_Controller.php');//se genera un mensaje con la respuesta
				}

				break;
			case 'SEARCH':
				//si no nos llegan los datos por post
				if (!$_POST){//nos llega el usuario a editar por get
					new PROF_ESPACIO_SEARCH();//invocamos la busqueda
				}//si nos llegan los datos por post
				else{
					$PROF_ESPACIO = get_data_form();//recojo los valores del formulario
					$datos = $PROF_ESPACIO->SEARCH(); //buscamos los datos

					$lista = array('DNI','CODESPACIO');//guardamos los datos

					new PROF_ESPACIO_SHOWALL($lista, $datos, '../index.php');//invocamos la vista con los datos
				}
				break;
			case 'SHOWCURRENT':
				$PROF_ESPACIO = new PROF_ESPACIO_Model($_REQUEST['DNI'],$_REQUEST['CODESPACIO']);//invocamos el modelo
				$valores = $PROF_ESPACIO->RellenaDatos(); //obtenenmos los datos
				new PROF_ESPACIO_SHOWCURRENT($valores); //mostramos los datos
				break;
				//SHOWALL
			default:
			//si no nos llegan los datos por post
				if (!$_POST){//nos llega el usuario a editar por get
					$PROF_ESPACIO = new PROF_ESPACIO_Model('','');//generamos el modelo
				}
				//si nos llegan los datos por post				
				else{
					$PROF_ESPACIO = get_data_form();//recojo los valores del formulario
				}
				$datos = $PROF_ESPACIO->SEARCH();//buscamos los datos
				$lista = array('DNI','CODESPACIO');//guardamos los datos en la variable lista
				new PROF_ESPACIO_SHOWALL($lista, $datos);//mostramos los datos
		}

?>