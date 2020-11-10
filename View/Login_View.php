<?php
//Clase: Login_View
//Creado el : 26-09-2019
//Creado por: 70ky5e
//Descripcion: Pantalla de LogIn
//-------------------------------------------------------

	class Login{

//Constructor
		function __construct(){	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; 
?>
			<br><h1><span key="Login" class="translate"></span><?php //['Login']; ?></h1>	 
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/Login_Controller.php' method='post' onsubmit="return comprobar_login();">
		
				 	Login : <input type = 'text' name = 'login' id = 'login' size = '9' onblur = "comprobarVacio('login') && comprobarTexto('login',9)"><br>

					Password : <input type = 'password' name = 'password' id = 'password' size = '15' onblur="comprobarVacio('password') && comprobarTexto('password',15)"  ><br>

				<button id=actionbtn type='submit' name='action' value='Login'><img id=icon src='../View/Icons/LOGIN.png'></button>
			</form>
			<?php if (!IsAuthenticated()){
					?>
					<tab><a id=btn href='../Controller/Register_Controller.php'><img id=icon src='../View/Icons/ADD.png'></a>
			<?php 
			} 
			?>
			<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin Login

?>