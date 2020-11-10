<?php

//Clase : PROF_ESPACIO_SHOWCURRENT
//Creado el : 04-10-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SHOWCURRENT.

	class PROF_ESPACIO_SHOWCURRENT{

		//Constructor

		function __construct($valores){	
			$this->valores = $valores;
			
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SHOWCURRENT" class="translate"></span><?php //['SHOWCURRENT']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/PROF_ESPACIO_Controller.php' method='post' onsubmit="return comprobar_registro();">
			
			 					
			 		
				
					DNI : <input type = 'text' name = 'DNI' id = 'DNI' placeholder = '' size = '9' maxlength="9" value = '<?php echo $this->valores['DNI']; ?>' onblur="" readonly><br>

					<span key="CodigoEspacio" class="translate"></span><?php //['CodigoEspacio']?> : <input type = 'text' name = 'CODESPACIO' id = 'CODESPACIO' placeholder = '' size = '10' maxlength="10" value = '<?php echo $this->valores['CODESPACIO']; ?>' onblur="" readonly><br>
				


			</form>
				
		
			<a id='btn'href='../Controller/PROF_ESPACIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	