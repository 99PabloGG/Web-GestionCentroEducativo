<?php

//Clase : TITULACION_DELETE	
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion DELETE.

	class TITULACION_DELETE{

//Constructor
		function __construct($tupla){	
			$this->tupla = $tupla;
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="DELETE" class="translate"></span><?php //['DELETE']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/TITULACION_Controller.php' method='post' >
					
				
					<span key="CodigoTitulacion" class="translate"></span><?php //['CodigoTitulacion']; ?>: <input type = 'text' name = 'CODTITULACION' id = 'CODTITULACION' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODTITULACION']; ?>' onblur=""  readonly><br>
					<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']; ?> : <input type = 'text' name = 'CODCENTRO' id = 'CODCENTRO' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODCENTRO']; ?>'  readonly ><br>
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?> : <input type = 'text' name = 'NOMBRETITULACION' id = 'NOMBRETITULACION'  size = '50' maxlength="50" value = '<?php echo $this->tupla['NOMBRETITULACION']; ?>' readonly><br>
					<span key="Responsable" class="translate"></span><?php //['Responsable']; ?> : <input type = 'text' name = 'RESPONSABLETITULACION' id = 'RESPONSABLETITULACION'  size = '60' maxlength="60" value = '<?php echo $this->tupla['RESPONSABLETITULACION']; ?>' readonly ><br>


					<button id=actionbtn type='submit' name='action' value='DELETE'><img id=icon src='../View/Icons/DELETE.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/TITULACION_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	