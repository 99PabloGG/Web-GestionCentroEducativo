<?php

//Clase : USUARIOS_SEARCH
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SEARCH.

	class USUARIOS_SEARCH{

//Constructor
		function __construct(){	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SEARCH" class="translate"></span><?php //['SEARCH']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/USUARIOS_Controller.php' method='post' onsubmit="">
			
			 		Login : <input type = 'text' name = 'login' id = 'login' size = '9' maxlength="9" value = '' onblur="" ><br>
					
					Password : <input type = 'text' name = 'password' id = 'password' size = '15' maxlength="15" value = ''><br>
					
					<span key="Nombre" class="translate"></span><?php //['Nombre']?> : <input type = 'text' name = 'nombre' id = 'nombre' size = '30' maxlength="30" value = ''  ><br>
					
					<span key="Apellidos" class="translate"></span><?php //['Apellidos']?> : <input type = 'text' name = 'apellidos' id = 'apellidos' size = '50' maxlength="50" value = ''  ><br>
					
					Email : <input type = 'text' name = 'email' id = 'email' size = '40' maxlength="40" value = ''><br>
					
					DNI : <input type = 'text' name = 'DNI' id = 'DNI' size = '9' maxlength="9" value = ''  ><br>
					
					<span key="Imagen" class="translate"></span><?php //['Imagen']?> : <input type = 'file' name = 'fotopersonal' id = 'fotopersonal' size = '15' maxlength="15" value = '' onblur="" ><br>
					
					<span key="Telefono" class="translate"></span><?php //['Telefono']?> : <input type = 'text' name = 'telefono' id = 'telefono' size = '11' maxlength="11" value = '' ><br>
					
					<span key="FechaNacimiento" class="translate"></span><?php //['FechaNacimiento']?> : <input type = 'date' name = 'FechaNacimiento' id = 'FechaNacimiento' size = '50' maxlength="50" value = '' onblur="" ><br>
					
					<span key="Sexo" class="translate"></span><?php //['Sexo']?> : <select name='sexo' onblur="">
								<option></option>
								<option value = 'hombre'>hombre</option>
								<option value = 'mujer'>mujer</option>
						   </select><br>

					<button id=actionbtn type='submit' name='action' value='SEARCH'><img id=icon src='../View/Icons/SEARCH.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/USUARIOS_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	