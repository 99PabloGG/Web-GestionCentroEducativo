<?php
//Clase : EDIFICIO_SEARCH
//Creado el : 28-09-2019
//Creado por: 70ky5e
//-------------------------------------------------------

	class EDIFICIO_SEARCH{

//Constructor
		function __construct(){	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SEARCH" class="translate"></span><?php //['SEARCH']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/EDIFICIO_Controller.php' method='post' >
			

					<span key="Codedificio" class="translate"></span><?php //['Codedificio']; ?> : <input type = 'text' name = 'CODEDIFICIO' id = 'CODEDIFICIO' placeholder = '' size = '10' maxlength="10" value = '' ><br>
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?> : <input type = 'text' name = 'NOMBREEDIFICIO' id = 'NOMBREEDIFICIO'  size = '50' maxlength="50" value = ''  ><br>
					<span key="Direccion" class="translate"></span><?php //['Direccion']; ?> : <input type = 'text' name = 'DIRECCIONEDIFICIO' id = 'DIRECCIONEDIFICIO'  size = '150' maxlength="150" value = ''  ><br>
					<span key="CampusEdificio" class="translate"></span><?php //['CampusEdificio']; ?> : <input type = 'text' name = 'CAMPUSEDIFICIO' id = 'CAMPUSEDIFICIO' size = '10' maxlength="10" value = ''><br>
					
					<button id=actionbtn type='submit' name='action' value='SEARCH'><img id=icon src='../View/Icons/SEARCH.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/EDIFICIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	