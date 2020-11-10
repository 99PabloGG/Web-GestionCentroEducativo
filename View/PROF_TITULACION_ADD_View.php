<?php

//Clase : PROF_TITULACION_ADD
//Creado el : 04-10-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion ADD.

	class PROF_TITULACION_ADD{

//Constructor
		function __construct($valores1,$valores2){	
			$this->valores1=$valores2;
			$this->valores2=$valores1;
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="ADD" class="translate"></span><?php //['ADD']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/PROF_TITULACION_Controller.php' method='post' onsubmit="return comprobar_proftitulacion();">
					DNI : <select name="DNI" required>						        
										<?php
										foreach($this->valores1 as $fila1)  { 
										?>
										<option value="<?php echo $fila1['DNI'] ?>"><?php echo $fila1['DNI'] ?></option>
										<?php
										}
										?>
									  </select><br>

					<span key="CodigoTitulacion" class="translate"></span><?php //['CodigoTitulacion']?>: <select name="CODTITULACION" required>						        
										<?php
										foreach($this->valores2 as $fila2)  { 
										?>
										<option value="<?php echo $fila2['CODTITULACION'] ?>"><?php echo $fila2['CODTITULACION'] ?></option>
										<?php
										}
										?>
									  </select><br>
				
					<span key="Anho" class="translate"></span><?php //['Anho']?> : <input type = 'text' name = 'ANHOACADEMICO' id = 'ANHOACADEMICO' placeholder = '' size = '9' maxlength="9" value = '' onblur="comprobarVacio('ANHOACADEMICO') && comprobarExp('ANHOACADEMICO')"required ><br>	
				

					<button id=actionbtn type='submit' name='action' value='ADD'><img id=icon src='../View/Icons/ADD.png'></button>
			</form>
			<a id='btn' href='../Controller/PROF_TITULACION_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	