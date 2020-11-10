<?php

//Clase : TITULACION_SEARCH
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SEARCH.

	class TITULACION_SEARCH{

//Constructor
		function __construct(){	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SEARCH" class="translate"></span><?php //['SEARCH']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/TITULACION_Controller.php' method='post' >
			
					<span key="CodigoTitulacion" class="translate"></span><?php //['CodigoTitulacion']; ?>: <input type = 'text' name = 'CODTITULACION' id = 'CODTITULACION' size = '10' maxlength="10" value = '' onblur="" ><br>
					<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']; ?> : <input type = 'text' name = 'CODCENTRO' id = 'CODCENTRO'  size = '10'  maxlength="10" value = ''  ><br>
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?>: <input type = 'text' name = 'NOMBRETITULACION' id = 'NOMBRETITULACION'  size = '50' maxlength="50" value = ''  ><br>
					<span key="Responsable" class="translate"></span><?php //['Responsable']; ?> : <input type = 'text' name = 'RESPONSABLETITULACION' id = 'RESPONSABLETITULACION'  size = '60' maxlength="60" value = ''   ><br>
					
					<button id=actionbtn type='submit' name='action' value='SEARCH'><img id=icon src='../View/Icons/SEARCH.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/TITULACION_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	