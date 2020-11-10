<?php

//Clase : PROF_TITULACION_SEARCH
//Creado el : 04-10-2019
//Creado por: 70ky5e


//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SEARCH.

	class PROF_TITULACION_SEARCH{

//Constructor
		function __construct(){	
			
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SEARCH" class="translate"></span><?php //['SEARCH']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/PROF_TITULACION_Controller.php' method='post'>
			
			 					
			 		
				
					DNI : <input type = 'text' name = 'DNI' id = 'DNI' placeholder = '' size = '9' maxlength="9" value = '' onblur="" ><br>

					<span key="CodigoEspacio" class="translate"></span><?php //['CodigoEspacio']?>: <input type = 'text' name = 'CODTITULACION' id = 'CODTITULACION' placeholder = '' size = '10' maxlength="10" value = '' onblur="" ><br>
				
					<span key="Anho" class="translate"></span><?php //['Anho']?>: <input type = 'text' name = 'ANHOACADEMICO' id = 'ANHOACADEMICO' placeholder = '' size = '4' maxlength="4" value = '' onblur="" ><br>
				

					<button id=actionbtn type='submit' name='action' value='SEARCH'><img id=icon src='../View/Icons/SEARCH.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/PROF_TITULACION_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	