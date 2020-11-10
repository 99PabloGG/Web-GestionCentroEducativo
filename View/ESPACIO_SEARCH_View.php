<?php
//Clase : ESPACIO_SEARCH
//Creado el :01-10-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SEARCH.
//-------------------------------------------------------

	class ESPACIO_SEARCH{

//Constructor
		function __construct(){	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SEARCH" class="translate"></span><?php //['SEARCH']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/ESPACIO_Controller.php' method='post'>
				
			 		<span key="CodigoEspacio" class="translate"></span><?php //['CodigoEspacio']?>: <input type = 'text' name = 'CODESPACIO' id = 'CODESPACIO' placeholder = '' size = '10' maxlength="10" value = '' onblur="" ><br>
					<span key="CodigoEdificio" class="translate"></span><?php //['CodigoEdificio']?>: <input type = 'text' name = 'CODEDIFICIO' id = 'CODEDIFICIO' placeholder = '' size = '10' maxlength="10" value = '' ><br>
					<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']?>: <input type = 'text' name = 'CODCENTRO' id = 'CODCENTRO'  size = '10' value = ''  ><br>
					<span key="Tipo" class="translate"></span><?php //['Tipo']?>:  <select name='TIPO' onblur="">
								<option value = ''> </option>
								<option value = 'DESPACHO' key="DESPACHO" class="translate"><?php //['DESPACHO']?></option>
								<option value = 'LABORATORIO' key="LABORATORIO" class="translate"><?php //['LABORATORIO']?></option>
								<option value = 'PAS'>PAS</option>
						   </select><br>
					
					<span key="SuperficieEspacio" class="translate"></span><?php //['SuperficieEspacio']?>: <input type = 'text' name = 'SUPERFICIEESPACIO' id = 'SUPERFICIEESPACIO' placeholder = '' size = '4' maxlength="4"  value = ''><br>
					<span key="NumeroInventarioEspacio" class="translate"></span><?php //['NumeroInventarioEspacio']?>: <input type = 'text' name = 'NUMINVENTARIOESPACIO' id = 'NUMINVENTARIOESPACIO' placeholder = '' size = '8' maxlength="8" value = ''><br>
					<button id=actionbtn type='submit' name='action' value='SEARCH'><img id=icon src='../View/Icons/SEARCH.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/ESPACIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	