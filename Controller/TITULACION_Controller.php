<?php
//Clase : TITULACION_Controller
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
	include '../Model/CENTRO_Model.php';		//es necesario incluir el model de Centro
	include '../Model/TITULACION_Model.php';
	include '../View/TITULACION_SHOWALL_View.php';
	include '../View/TITULACION_SEARCH_View.php';
	include '../View/TITULACION_ADD_View.php';
	include '../View/TITULACION_EDIT_View.php';
	include '../View/TITULACION_DELETE_View.php';
	include '../View/TITULACION_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
	function get_data_form(){

                $CODTITULACION =  $_POST['CODTITULACION'];//recojo la variable CODTITULACION
                $CODCENTRO =  $_POST['CODCENTRO'];//recojo la variable CODCENTRO
                $NOMBRETITULACION	 =  $_POST['NOMBRETITULACION'];//recojo la variable NOMBRETITULACION
                $RESPONSABLETITULACION =  $_POST['RESPONSABLETITULACION'];//recojo la variable RESPONSABLETITULACION
                
               

		//creamos el modelo con los datos que recojimos anteriormente y lo guardamos en la variable titulacion
		$TITULACION = new TITULACION_Model($CODTITULACION,$CODCENTRO,$NOMBRETITULACION,$RESPONSABLETITULACION);
		return $TITULACION;
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
					$CENTRO = new CENTRO_Model('','','','','');//creamos el objeto
					$valores = $CENTRO->SEARCH();//buscamos los valores
					new TITULACION_ADD($valores);//invocamos la vista con los valores precargados
				}
				else{	//si nos llegan los datos por post
					$TITULACION = get_data_form(); //se recogen los datos del formulario
					$respuesta = $TITULACION->ADD();//añadimos los datos
					new MESSAGE($respuesta, '../Controller/TITULACION_Controller.php');//generamos un mensaje
				}
				break;
			case 'DELETE':
				//si no nos llegan los datos por post
				if (!$_POST){ //nos llega el id a eliminar por get
					$TITULACION = new TITULACION_Model($_REQUEST['CODTITULACION'],'','','');//creamos el objeto
					$valores = $TITULACION->RellenaDatos();//recojemos los datos
					new TITULACION_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
				}//si nos llegan los datos por post
				else{ // llegan los datos confirmados por post y se eliminan
					$TITULACION = get_data_form();//se recogen los datos del formulario
					$respuesta = $TITULACION->DELETE();//borramos los datos
					new MESSAGE($respuesta, '../Controller/TITULACION_Controller.php');//generamos el mensaje
				}
				break;
			case 'EDIT':
				//si no nos llegan los datos por post
				if (!$_POST){ //nos llega el usuario a editar por get
					$TITULACION = new TITULACION_Model($_REQUEST['CODTITULACION'],'','',''); // Creo el objeto
					$valores = $TITULACION->RellenaDatos(); // obtengo todos los datos de la tupla
					$CENTRO = new CENTRO_Model('','','','','');//creamos el objeto
					$valores2 = $CENTRO->SEARCH();//buscamos
					//si hay valores
					if (is_array($valores))
					{
						new TITULACION_EDIT($valores,$valores2); //invoco la vista de edit con los datos 
							//precargados
					}else//si no hay valores
					{
						new MESSAGE($valores, '../Controller/TITULACION_Controller.php');//se genera un mensaje
					}
				}
				else{//si nos llegan los datos por post

					$TITULACION = get_data_form(); //recojo los valores del formulario

					$respuesta = $TITULACION->EDIT(); // update en la bd en la bd
					new MESSAGE($respuesta, '../Controller/TITULACION_Controller.php');//generamos un mensaje con la respuesta
				}

				break;
			case 'SEARCH':
				if (!$_POST){//si no nos llegan los datos por post
				//nos llega la titulacion por get
					new TITULACION_SEARCH();//invocamos la busqueda
				}
				else{//si nos llegan los datos por post
					$TITULACION = get_data_form();//recojo los valores del formulario
					$datos = $TITULACION->SEARCH();//buscamos los datos

					$lista = array('NOMBRETITULACION','RESPONSABLETITULACION');//guardamos los datos

					new TITULACION_SHOWALL($lista, $datos, '../index.php');//mostramos los datos
				}
				break;
			case 'SHOWCURRENT':
				$TITULACION = new TITULACION_Model($_REQUEST['CODTITULACION'],'','','');//invocamos el modelo
				$valores = $TITULACION->RellenaDatos();//recojemos los datos
				new TITULACION_SHOWCURRENT($valores);//mostramos los valores
				break;
			//SHOWALL
			default:
			//si no nos llegan los datos por post
				if (!$_POST){//nos llega el código de la titulación por get
					$TITULACION = new TITULACION_Model('','','','');//creamos el objeto
				}
				else{
				//si nos llegan los datos por post
					$TITULACION = get_data_form();//recojo los valores del formulario
				}
				$datos = $TITULACION->SEARCH();//buscamos los datos
				$lista = array('NOMBRETITULACION','RESPONSABLETITULACION');//guardamos los datos el la variable lista
				new TITULACION_SHOWALL($lista, $datos);//mostramos los datos
		}

?>