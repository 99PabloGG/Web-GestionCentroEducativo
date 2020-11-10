<?php
//Clase : ESPACIO_ADD
//Creado el : 01-10-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion ADD.
//-------------------------------------------------------

	class ESPACIO_ADD{

//Constructor
		function __construct($valores1,$valores2){	
			$this->valores1 = $valores1;
			$this->valores2 = $valores2;
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="ADD" class="translate"></span><?php //['ADD']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/ESPACIO_Controller.php' method='post' onsubmit="return comprobar_espacio();">
			
			 					
			 		<span key="CodigoEspacio" class="translate"></span><?php //['CodigoEspacio']?> : <input type = 'text' name = 'CODESPACIO' id = 'CODESPACIO' placeholder = '' size = '10' maxlength="10" value = '' onblur="comprobarVacio('CODESPACIO') && comprobarAlfabetico('CODESPACIO', ' 10')" required ><br>
				
					<span key="CodigoEdificio" class="translate"></span><?php //['CodigoEdificio']?>  : <select name="CODEDIFICIO" required>						        
										<?php
										foreach($this->valores1 as $fila1)  { 
										?>
										<option value="<?php echo $fila1['CODEDIFICIO'] ?>"><?php echo $fila1['NOMBREEDIFICIO'] ?></option>
										<?php
										}
										?>
									  </select><br>
				
					<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']?>:<select name="CODCENTRO" required>						        
										<?php
										foreach($this->valores2 as $fila2)  { 
										?>
										<option value="<?php echo $fila2['CODCENTRO'] ?>"><?php echo $fila2['NOMBRECENTRO'] ?></option>
										<?php
										}
										?>
									  </select><br>
					<span key="Tipo" class="translate"></span><?php //['Tipo']?> :  <select name="TIPO" required>						        
										<option value="DESPACHO" key="DESPACHO" class="translate"><?php //['DESPACHO']?></option>
										<option value="LABORATORIO" key="LABORATORIO" class="translate"><?php //['LABORATORIO']?></option>
										<option value="PAS">PAS</option>
									  </select><br>
					
					<span key="SuperficieEspacio" class="translate"></span><?php //['SuperficieEspacio']?> : <input type = 'text' name = 'SUPERFICIEESPACIO' id = 'SUPERFICIEESPACIO' placeholder = '' size = '4' maxlength="4" value = '' onblur="comprobarVacio('SUPERFICIEESPACIO')  && comprobarEntero('SUPERFICIEESPACIO', '1', ' 9999') " required ><br>
					<span key="NumeroInventarioEspacio" class="translate"></span><?php //['NumeroInventarioEspacio']?> : <input type = 'text' name = 'NUMINVENTARIOESPACIO' id = 'NUMINVENTARIOESPACIO' placeholder = '' size = '8' maxlength="8" value = '' onblur="comprobarVacio('NUMINVENTARIOESPACIO') && comprobarEntero('NUMINVENTARIOESPACIO', '1', ' 99999999') " required ><br>


					<button id=actionbtn type='submit' name='action' value='ADD'><img id=icon src='../View/Icons/ADD.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/ESPACIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	