<?php

//Clase : USUARIOS_EDIT
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion EDIT.

	class USUARIOS_EDIT{
//Constructor
		function __construct($tupla){	
			$this->tupla = $tupla;
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="EDIT" class="translate"></span><?php //['EDIT']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/USUARIOS_Controller.php' method='post' onsubmit="return comprobar_registro();">
			
					Login : <input type = 'text' name = 'login' id = 'login' size = '9' maxlength="9" value = '<?php echo $this->tupla['login']; ?>' onblur="comprobarVacio('login')  && comprobarTexto('login',9)" readonly><br>
					
					Password : <input type = 'text' name = 'password' id = 'password'  size = '15' maxlength="15" value = '<?php echo $this->tupla['password']; ?>' onblur="comprobarVacio('password')  && comprobarTexto('password',15)" required><br>
					
					<span key="Nombre" class="translate"></span><?php //['Nombre']?> : <input type = 'text' name = 'nombre' id = 'nombre'  size = '30' maxlength="30" value = '<?php echo $this->tupla['nombre']; ?>' onblur="comprobarVacio('nombre')  && comprobarTexto('nombre',30)" required><br>
					
					<span key="Apellidos" class="translate"></span><?php //['Apellidos']?> : <input type = 'text' name = 'apellidos' id = 'apellidos'  size = '50' maxlength="50" value = '<?php echo $this->tupla['apellidos']; ?>' onblur="comprobarVacio('apellidos')  && comprobarTexto('apellidos',50)" required><br>
					
					Email : <input type = 'text' name = 'email' id = 'email' size = '40' maxlength="40" value = '<?php echo $this->tupla['email']; ?>' readonly><br>
					
					DNI : <input type = 'text' name = 'DNI' id = 'DNI' size = '9' maxlength="9" value = '<?php echo $this->tupla['DNI']; ?>'readonly><br>
					
					<span key="Imagen" class="translate"></span><?php //['Imagen']?> :<br><br><a href="<?php echo ($this->tupla['fotopersonal']); ?>" ><?php echo ($this->tupla['fotopersonal']); ?></a><br><br><input type = 'file' name = 'fotopersonal' id = 'fotopersonal' size = '50' value = '<?php echo $this->tupla['fotopersonal']; ?>' onblur="esNoVacio('fotopersonal')" required><br>

					
					<span key="Telefono" class="translate"></span><?php //['Telefono']?> : <input type = 'text' name = 'telefono' id = 'telefono'  size = '11' maxlength="11" value = '<?php echo $this->tupla['telefono']; ?>' onblur="comprobarVacio('telefono')  && comprobarTelf('telefono')"required ><br>
					
					<span key="FechaNacimiento" class="translate"></span><?php //['FechaNacimiento']?> : <input type = 'text' name = 'FechaNacimiento' id = 'datepicker' size = '50' maxlength="50" value = '<?php echo $this->tupla['FechaNacimiento']; ?>' onblur="comprobarVacio('FechaNacimiento')" required><br>
					
					<span key="Sexo" class="translate"></span><?php //['Sexo']?> : <select name='sexo' onblur="comprobarVacio('sexo');" required>
								<option value = '<?php echo $this->tupla['sexo']; ?>' key="<?php echo $this->tupla['sexo']; ?>" class="translate"></option>
								<option value = 'hombre' key="Hombre" class="translate"></option>
								<option value = 'mujer' key="Mujer" class="translate"></option>
						   </select><br>

					<button id=actionbtn type='submit' name='action' value='EDIT'><img id=icon src='../View/Icons/EDIT.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/USUARIOS_Controller.php'><img id=icon src='../View/Icons/BACK.png'> </a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	