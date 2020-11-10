<?php
//Clase : PROF_TITULACION_Controller
//Creado el : 03-10-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------

	session_start(); //solicito trabajar con la session

	include '../Functions/Authentication.php';
	//Si no está autentificado, redirige al index.php
	if (!IsAuthenticated()){
		header('Location:../index.php');
	}

	include '../Model/PROF_TITULACION_Model.php';
	include '../Model/PROFESOR_Model.php';		//es necesario incluir el model de Profesor
	include '../Model/TITULACION_Model.php';		//es necesario incluir el model de Titulacion
	include '../View/PROF_TITULACION_SHOWALL_View.php';
	include '../View/PROF_TITULACION_SEARCH_View.php';
	include '../View/PROF_TITULACION_ADD_View.php';
	include '../View/PROF_TITULACION_EDIT_View.php';
	include '../View/PROF_TITULACION_DELETE_View.php';
	include '../View/PROF_TITULACION_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
	function get_data_form(){

                $DNI =  $_POST['DNI'];//recojo la variable DNI
                $CODTITULACION =  $_POST['CODTITULACION'];//recojo la variable CODTITULACION
				$ANHOACADEMICO=  $_POST['ANHOACADEMICO'];//recojo la variable ANHOACADEMICO
              

		//creamos el modelo con los datos que recojimos anteriormente y lo guardamos en la variable prof_titulacion
		$PROF_TITULACION = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
		return $PROF_TITULACION;
	}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

	if (!isset($_REQUEST['action'])){
		$_REQUEST['action'] = '';
	}

// En funcion del action realizamos las acciones necesarias

		switch ($_REQUEST['action']){
			case 'ADD':
				if (!$_POST){ // se incoca la vista de add de usuarios
					$TITULACION= new TITULACION_Model('','','','');//creamos el modelo titulacion
					$valores1= $TITULACION->SEARCH();//buscamos los datos y los guardamos en valores1
					
					$PROFESOR= new PROFESOR_Model('','','','','');//creamos el modelo profesor
					$valores2= $PROFESOR->SEARCH();//buscamos los datos
					new PROF_TITULACION_ADD($valores1,$valores2);//se invoca la vista con los valores precargados
				}
				//si se reciben los datos por post
				else{
					$PROF_TITULACION = get_data_form(); //se recogen los datos del formulario
					$respuesta = $PROF_TITULACION->ADD();//se añaden los datos y se guardan en respuesta
					new MESSAGE($respuesta, '../Controller/PROF_TITULACION_Controller.php');//se genera un mensaje con la respuesta
				}
				break;
			case 'DELETE':
				//si no se reciben los datos por post
				if (!$_POST){ //nos llega el id a eliminar por get
					$PROF_TITULACION = new PROF_TITULACION_Model($_REQUEST['DNI'],$_REQUEST['CODTITULACION'],'');//invocamos //el modelo
					$valores = $PROF_TITULACION->RellenaDatos();//recojemos los datos
					new PROF_TITULACION_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
				}//si se reciben los datos por post
				else{ // llegan los datos confirmados por post y se eliminan
					$PROF_TITULACION = get_data_form();//se recogen los datos del formulario
					$respuesta = $PROF_TITULACION->DELETE();//se eliminan los datos
					new MESSAGE($respuesta, '../Controller/PROF_TITULACION_Controller.php'); //se genera un mensaje con la respuesta
				}
				break;
			case 'EDIT':
				//si no se reciben los datos por post
				if (!$_POST){ //nos llega el usuario a editar por get
					$PROF_TITULACION = new PROF_TITULACION_Model($_REQUEST['DNI'],$_REQUEST['CODTITULACION'],''); // Creo el objeto
					$valores = $PROF_TITULACION->RellenaDatos(); // obtengo todos los datos de la tupla
					//si hay valores
					if (is_array($valores))
					{
						new PROF_TITULACION_EDIT($valores); //invoco la vista de edit con los datos 
							//precargados
					}else	//si no hay valores
					{
						new MESSAGE($valores, '../Controller/PROF_TITULACION_Controller.php');//se genera un mensaje 
					}
				}
				//si se reciben los datos por post
				else{

					$PROF_TITULACION = get_data_form(); //recojo los valores del formulario

					$respuesta = $PROF_TITULACION->EDIT(); // update en la bd en la bd
					new MESSAGE($respuesta, '../Controller/PROF_TITULACION_Controller.php');//se genera un mensaje con la //respuesta
				}
				break;
			case 'SEARCH':
			//si no se reciben los datos por post
				if (!$_POST) { //nos llega  la titulación a buscar por get
					new PROF_TITULACION_SEARCH(); //creamos la vista
				}
				else{//si se reciben los datos por post
					$PROF_TITULACION = get_data_form();//recojo los valores del formulario
					$datos = $PROF_TITULACION->SEARCH();//buscamos los datos

					$lista = array('DNI','CODTITULACION');//añadimos los datos

					new PROF_TITULACION_SHOWALL($lista, $datos, '../index.php');//mostramos los datos
				}
				break;
			case 'SHOWCURRENT':
				//creamos el modelo
				$PROF_TITULACION = new PROF_TITULACION_Model($_REQUEST['DNI'],$_REQUEST['CODTITULACION'],'');//rEQUEST A prof_titulacion
				$valores = $PROF_TITULACION->RellenaDatos();//guardamos los datos
				new PROF_TITULACION_SHOWCURRENT($valores);//mostramos los datos
				break;
			//SHOWALL
			default:
			//si no se reciben los datos por post
				if (!$_POST){//nos llega la titulación a mostrar por get
					$PROF_TITULACION = new PROF_TITULACION_Model('','','');//creamos el objeto
				}
				else{//si se reciben los datos por post
					$PROF_TITULACION = get_data_form();//recojo los valores del formulario
				}
				$datos = $PROF_TITULACION->SEARCH();//buscamos los datos
				$lista = array('DNI','CODTITULACION');//guardamos los datos en la variable lista
				new PROF_TITULACION_SHOWALL($lista, $datos);//mostramos los datos 
		}

?>