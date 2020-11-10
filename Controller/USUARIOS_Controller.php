<?php
//Clase : USUARIOS_Controller
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Funciona como intermediario Vista-Modelo (pide los datos al modelo y los devuelve de nuevo a la vista). Se encarga de controlar las interacciones del usuario en la vista.
//-------------------------------------------------------


	 	session_start(); //solicito trabajar con la session

	include '../Functions/Authentication.php';

	//si no se autentifica
	if (!IsAuthenticated()){
		header('Location:../index.php');
	}

	include '../Model/USUARIOS_Model.php';
	include '../View/USUARIOS_SHOWALL_View.php';
	include '../View/USUARIOS_SEARCH_View.php';
	include '../View/USUARIOS_ADD_View.php';
	include '../View/USUARIOS_EDIT_View.php';
	include '../View/USUARIOS_DELETE_View.php';
	include '../View/USUARIOS_SHOWCURRENT_View.php';
	include '../View/MESSAGE_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIOS y la devuelve
	function get_data_form(){

		$login=$_POST['login']; //recojo la variable login
		$password=$_POST['password']; //recojo la variable password
		$DNI=$_POST['DNI']; //recojo la variable DNI
		$nombre=$_POST['nombre']; //recojo la variable nombre
		$apellidos=$_POST['apellidos']; //recojo la variable apellidos
		$telefono=$_POST['telefono']; //recojo la variable telefono
		$email=$_POST['email']; //recojo la variable email
		$FechaNacimiento=$_POST['FechaNacimiento']; //recojo la variable FechaNacimiento
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
                    $fotopersonal = $dir_subida . $DNI . ".". $extension;
                    move_uploaded_file($nombreTempFoto, $fotopersonal);
                    
                }else{
                    if(isset($_POST['imagen'])){
                        $fotopersonal=$_POST['imagen'];
                    }else{

                    $fotopersonal=null;
                }
                }
		$sexo=$_POST['sexo']; //recojo la variable sexo
		$action = $_POST['action']; //recojo la acción que se va a realizar

		//creamos el modelo con los datos que recojimos anteriormente y lao guardamos en la variable usuarios
		$usuarios = new USUARIOS_Model($login,$password,$DNI,$nombre,$apellidos,$telefono,$email,$FechaNacimiento,$fotopersonal,$sexo);
		return $usuarios;
	}

	
// sino existe la variable action la crea vacia para no tener error de undefined index

	if (!isset($_REQUEST['action'])){
		$_REQUEST['action'] = '';
	}

// En funcion del action realizamos las acciones necesarias

		Switch ($_REQUEST['action']){
			
			case 'ADD':
				//si no recibe datos por post 
				if (!$_POST){ //nos llega el usuario a añadir por get
					new USUARIOS_ADD();// se invoca la vista de add de usuarios
				}
				//si recibe datos procede a añadirlos
				else{
					$USUARIOS = get_data_form(); //se recogen los datos del formulario
					$respuesta = $USUARIOS->ADD();//se añade el usuario y se guarda la respuesta
					new MESSAGE($respuesta, '../Controller/USUARIOS_Controller.php'); //genera un mensaje con la respuesta
				}
				break;
			
			case 'DELETE':
				//si no se envia el formulario de borrar por post, abre la vista
				if (!$_POST){ //nos llega el id a eliminar por get
					$USUARIOS = new USUARIOS_Model($_REQUEST['login'],'','','','','','','','',''); // se invoca la vista //delete de usuarios
					$valores = $USUARIOS->RellenaDatos();
					new USUARIOS_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el //borrado mediante un form que no permite modificar las variables 
				}
				
				else{ // llegan los datos confirmados por post y se eliminan
					$USUARIOS = get_data_form();//se recogen los datos del formulario
					$respuesta = $USUARIOS->DELETE(); //se elimina el usuario 
					new MESSAGE($respuesta, '../Controller/USUARIOS_Controller.php'); //genera un mensaje con la respuesta
				}
				break;
			
			case 'EDIT':
				if (!$_POST){ //nos llega el usuario a editar por get
					$USUARIOS = new USUARIOS_Model($_REQUEST['login'],'','','','','','','','',''); // Creo el objeto
					$valores = $USUARIOS->RellenaDatos(); // obtengo todos los datos de la tupla
					//si tenemos valores editamos
					if (is_array($valores))
					{
						new USUARIOS_EDIT($valores); //invoco la vista de edit con los datos precargados
						
					//si no enviamos un mensaje en blanco		
					}else
					{
						new MESSAGE($valores, '../Controller/USUARIOS_Controller.php'); 
					}
				}
				//si nos llega el post
				else{

					$USUARIOS = get_data_form(); //recojo los valores del formulario

					$respuesta = $USUARIOS->EDIT(); // update en la bd en la bd
					new MESSAGE($respuesta, '../Controller/USUARIOS_Controller.php');//genera un mensaje con la respuesta
				}

				break;
			
			case 'SEARCH':
				if (!$_POST){ //nos llega el usuario a buscar por get
					new USUARIOS_SEARCH(); //invocamos la vista
				}
				//si nos llega por post
				else{
					$USUARIOS = get_data_form();  //recojemos los valores del formulario
					$datos = $USUARIOS->SEARCH(); //obtengo todos los datos de la tupla

					$lista = array('login','email', 'nombre', 'apellidos'); //guardamos en la variable lista los campos que queremos que se muestren

					new USUARIOS_SHOWALL($lista, $datos, '../index.php'); //muestra los datos que buscamos
				}
				break;
			
			case 'SHOWCURRENT':
				$USUARIOS = new USUARIOS_Model($_REQUEST['login'],'','','','','','','','',''); //invocamos el modelo
				$valores = $USUARIOS->RellenaDatos(); //obtenemos los datos
				new USUARIOS_SHOWCURRENT($valores); //mostramos los datos
				break;
			
			//SHOWALL
			default:
				//si no nos llega el post
				if (!$_POST){  //nos llega el usuario a mostrar por get
					$USUARIOS = new USUARIOS_Model('','','','','','','','','',''); //invocamos la vista
				}
				//si nos llega por post
				else{
					$USUARIOS = get_data_form();//recojemos los valores del formulario
				}
				$datos = $USUARIOS->SEARCH(); //obtenemos los datos
				$lista = array('login','nombre','apellidos','email'); //guardamos en la variable lista los campos 																//que queremos
				new USUARIOS_SHOWALL($lista, $datos);//mostramos los datos
		}

?>