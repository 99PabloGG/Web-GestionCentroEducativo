<?php

//Clase : CENTRO_ADD
//Creado el : 29-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion ADD.
//-------------------------------------------------------

	class CENTRO_ADD{

//Constructor
		function __construct($valores){	
			$this->valores = $valores;
			$this->render();
		}

		//Función que contiene las lineas de codigo que printan la informacion.
		function render(){
			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="ADD" class="translate"></span><?php //['ADD']; ?></h1>	

			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/CENTRO_Controller.php' method='post' onsubmit="return comprobar_centro();">
			
			 					
			 		<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']; ?> : <input type = 'text' name = 'CODCENTRO' id = 'CODCENTRO' placeholder = '' size = '10' maxlength="10" value = '' onblur="comprobarVacio('CODCENTRO') && comprobarAlfabetico('CODCENTRO', '10') " onblur="comprobarVacio('password') " required><br>
				
				
				
					<span key="Codedificio" class="translate"></span><?php //['Codedificio']; ?>: <select name="CODEDIFICIO"  required>						        
						<?php
						foreach($this->valores as $fila)  { 
						?>
						<option value="<?php echo $fila['CODEDIFICIO'] ?>"><?php echo $fila['NOMBREEDIFICIO'] ?></option>
						<?php
						}
						?>
					  </select><br>

				
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?>: <input type = 'text' name = 'NOMBRECENTRO' id = 'NOMBRECENTRO'  size = '50' maxlength="50" value = '' onblur="comprobarVacio('NOMBRECENTRO') && comprobarTexto('NOMBRECENTRO', ' 50')" required><br>
					<span key="Direccion" class="translate"></span><?php //['Direccion']; ?> : <input type = 'text' name = 'DIRECCIONCENTRO' id = 'DIRECCIONCENTRO'  size = '150' maxlength="150" value = '' onblur="comprobarVacio('DIRECCIONCENTRO') && comprobarAlfabetico('DIRECCIONCENTRO', ' 150')" required><br>
					Responsable: <input type = 'text' name = 'RESPONSABLECENTRO' id = 'RESPONSABLECENTRO' size = '60' maxlength="60" value = '' onblur="comprobarVacio('RESPONSABLECENTRO') && comprobarTexto('RESPONSABLECENTRO', ' 60') " required><br>

					<button id=actionbtn type='submit' name='action' value='ADD'><img id=icon src='../View/Icons/ADD.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/CENTRO_Controller.php'><img id=icon src='../View/Icons/BACK.png'> </a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	