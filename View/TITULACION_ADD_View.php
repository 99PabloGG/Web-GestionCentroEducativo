<?php

//Clase : TITULACION_ADD
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion ADD.

	class TITULACION_ADD{

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
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/TITULACION_Controller.php' method='post' onsubmit="return comprobar_titulacion();">
			
			 					
			 		<span key="CodigoTitulacion" class="translate"></span><?php //['CodigoTitulacion']; ?>: <input type = 'text' name = 'CODTITULACION' id = 'CODTITULACION' size = '10' maxlength="10" value = '' onblur="comprobarVacio('CODTITULACION') && comprobarAlfabetico('CODTITULACION', ' 10')" required ><br>
					<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']; ?> :<select name="CODCENTRO" required>						        
										<?php
										foreach($this->valores as $fila)  { 
										?>
										<option value="<?php echo $fila['CODCENTRO'] ?>"><?php echo $fila['NOMBRECENTRO'] ?></option>
										<?php
										}
										?>
									  </select><br>
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?> : <input type = 'text' name = 'NOMBRETITULACION' id = 'NOMBRETITULACION'  size = '50' maxlength="50" value = '' onblur="comprobarVacio('NOMBRETITULACION') && comprobarTexto('NOMBRETITULACION', ' 50')" required ><br>
					<span key="Responsable" class="translate"></span><?php //['Responsable']; ?> : <input type = 'text' name = 'RESPONSABLETITULACION' id = 'RESPONSABLETITULACION'  size = '60' maxlength="60" value = '' onblur="comprobarVacio('RESPONSABLETITULACION') && comprobarTexto('RESPONSABLETITULACION', ' 60')" required  ><br>
					
					<button id=actionbtn type='submit' name='action' value='ADD'><img id=icon src='../View/Icons/ADD.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/TITULACION_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	