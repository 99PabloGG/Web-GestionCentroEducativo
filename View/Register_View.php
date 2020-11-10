<?php

//Clase : Register
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripcion: Pantalla de Registro

	class Register{

//Constructor
		function __construct(){	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="Registro" class="translate"></span><?php //['Registro']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/Register_Controller.php' method='post' onsubmit="return comprobar_registro();">
			
				 	Login : <input type = 'text' name = 'login' id = 'login' size = '9' maxlength="9" value = '' onblur="comprobarVacio('login') && comprobarTexto('login',9)" required><br>

					Password : <input type = 'text' name = 'password' id = 'password' size = '15' maxlength="15" value = '' onblur="comprobarVacio('password')  && comprobarTexto('password',15)" required><br>

					<span key="Nombre" class="translate"></span><?php //['Nombre']?> : <input type = 'text' name = 'nombre' id = 'nombre' size = '30' maxlength="30" value = '' onblur="comprobarVacio('nombre')  && comprobarTexto('nombre',30)" required><br>

					<span key="Apellidos" class="translate"></span><?php //['Apellidos']?> : <input type = 'text' name = 'apellidos' id = 'apellidos' size = '50' maxlength="50" value = '' onblur="comprobarVacio('apellidos')  && comprobarTexto('apellidos',50)" required><br>

					Email : <input type = 'text' name = 'email' id = 'email' size = '40' maxlength="40" value = '' onblur="comprobarVacio('email')  && comprobarEmail('email')" required><br>

					DNI : <input type = 'text' name = 'DNI' id = 'DNI' size = '9' maxlength="9" value = '' onblur="comprobarVacio('DNI')  && comprobarDni('DNI')"required ><br>

					<span key="Imagen" class="translate"></span><?php //['Imagen']?> :<br> <input type = 'file' name = 'fotopersonal' id = 'fotopersonal' size = '50' value = '' onblur="esNoVacio('fotopersonal')" required><br>

					<span key="Telefono" class="translate"></span><?php //['Telefono']?> : <input type = 'text' name = 'telefono' id = 'telefono' size = '11' maxlength="11" value = '' onblur="comprobarVacio('telefono')  && comprobarTelf('telefono')" required><br>

					<span key="FechaNacimiento" class="translate"></span><?php //['FechaNacimiento']?> : <input type = "text" name = 'FechaNacimiento' id = 'datepicker' size = '10' maxlength="10" value = ''  required readonly><br>
					
					<span key="Sexo" class="translate"></span><?php //['Sexo']?> : <select name='sexo' onblur="comprobarVacio('sexo');" required>
								<option value = 'hombre' key="Hombre" class="translate"><?php //['Hombre']?></option>
								<option value = 'mujer' key="Mujer" class="translate"><?php //['Mujer']?></option>
						   </select><br>

					<button id=actionbtn type='submit' name='action' value='REGISTER'><img id=icon src='../View/Icons/ADD.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/Index_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	