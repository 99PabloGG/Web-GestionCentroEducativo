<?php
//Clase : PROFESOR_Controller
//Creado el : 27-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------

	session_start(); //solicito trabajar con la session

	include '../Functions/Authentication.php';
		//Si no está autentificado, redirige al index.php
	if (!IsAuthenticated()){
		header('Location:../index.php');
	}

	include '../Model/PROFESOR_Model.php';
	include '../View/PROFESOR_SHOWALL_View.php';
	include '../View/PROFESOR_SEARCH_View.php';
	include '../View/PROFESOR_ADD_View.php';
	include '../View/PROFESOR_EDIT_View.php';
	include '../View/PROFESOR_DELETE_View.php';
	include '../View/PROFESOR_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
	function get_data_form(){

                $DNI =  $_POST['DNI'];//recojo la variable DNI
                $NOMBREPROFESOR =  $_POST['NOMBREPROFESOR'];//recojo la variable NOMBREPROFESOR
                $APELLIDOSPROFESOR	 =  $_POST['APELLIDOSPROFESOR'];//recojo la variable APELLIDOSPROFESOR
                $AREAPROFESOR =  $_POST['AREAPROFESOR'];//recojo la variable AREAPROFESOR
                $DEPARTAMENTOPROFESOR =  $_POST['DEPARTAMENTOPROFESOR'];//recojo la variable DEPARTAMENTOPROFESOR
               

		//creamos el modelo con los datos que recojimos anteriormente y lo guardamos en la variable profesor
		$PROFESOR = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
		return $PROFESOR;
	}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

	if (!isset($_REQUEST['action'])){
		$_REQUEST['action'] = '';
	}

// En funcion del action realizamos las acciones necesarias

		switch ($_REQUEST['action']){
			case 'ADD':
				//si no nos llegan los datos por post
				if (!$_POST){ // se incoca la vista de add de usuarios
					new PROFESOR_ADD();//invoca la vista de add
				}
				else{//si nos llegan los datos por post
					$PROFESOR = get_data_form(); //se recogen los datos del formulario
					$respuesta = $PROFESOR->ADD();//se añaden los datos y se guardan en la variable respuesta
					new MESSAGE($respuesta, '../Controller/PROFESOR_Controller.php'); //se genera un mensaje con la respuesta
				}
				break;
			case 'DELETE':
				if (!$_POST){ //nos llega el id a eliminar por get
					$PROFESOR = new PROFESOR_Model($_REQUEST['DNI'],'','','','');//creamos el objeto
					$valores = $PROFESOR->RellenaDatos(); ////recogemos los datos en la variable valores
					new PROFESOR_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
				}
				else{ // llegan los datos confirmados por post y se eliminan
					$PROFESOR = get_data_form();//se recogen los datos del formulario
					$respuesta = $PROFESOR->DELETE();//se eliminan y se guarda en la variable respuesta
					new MESSAGE($respuesta, '../Controller/PROFESOR_Controller.php');//se genera un mensaje con la respuesta
				}
				break;
			case 'EDIT':
				//si no nos llegan los datos por post
				if (!$_POST){ //nos llega el usuario a editar por get
					$PROFESOR = new PROFESOR_Model($_REQUEST['DNI'],'','','',''); // Creo el objeto
					$valores = $PROFESOR->RellenaDatos(); // obtengo todos los datos de la tupla
					//si hay valores
					if (is_array($valores))
					{
						new PROFESOR_EDIT($valores); //invoco la vista de edit con los datos 
							//precargados
					}else					//si no hay valores		
					{
						new MESSAGE($valores, '../Controller/PROFESOR_Controller.php');//se genera un mensaje con la respuesta
					}
				}
				else{//si nos llegan los datos por post

					$PROFESOR = get_data_form(); //recojo los valores del formulario

					$respuesta = $PROFESOR->EDIT(); // update en la bd en la bd
					new MESSAGE($respuesta, '../Controller/PROFESOR_Controller.php');//se genera un mensaje con la respuesta
				}

				break;
			case 'SEARCH':
					//si no nos llegan los datos por post
				if (!$_POST){//nos llega el profesor a buscar por get
					new PROFESOR_SEARCH();//invocamos la busqueda
				}
				else{//si nos llegan los datos por post
					$PROFESOR = get_data_form();//recojo los valores del formulario
					$datos = $PROFESOR->SEARCH();//buscamos los datos

					$lista = array('NOMBREPROFESOR','APELLIDOSPROFESOR');//guardamos los datos

					new PROFESOR_SHOWALL($lista, $datos, '../index.php');//mostramos los datos
				}
				break;
			case 'SHOWCURRENT':
				$PROFESOR = new PROFESOR_Model($_REQUEST['DNI'],'','','','');//invocamos el modelo
				$valores = $PROFESOR->RellenaDatos();//recojemos los datos
				new PROFESOR_SHOWCURRENT($valores);//mostramos los valores
				break;
			//SHOWALL
			default:
				//si no nos llegan los datos por post
				if (!$_POST){//nos llega el profesor a mostrar por get
					$PROFESOR = new PROFESOR_Model('','','','','');//creamos el objeto
				}
				//si no nos llegan los datos por post
				else{
					$PROFESOR = get_data_form();//recojo los valores del formulario
				}
				$datos = $PROFESOR->SEARCH();//buscamos los datos
				$lista = array('NOMBREPROFESOR','APELLIDOSPROFESOR');//guardamos los datos en la variable lista
				new PROFESOR_SHOWALL($lista, $datos);//mostramos los datos
		}

?>