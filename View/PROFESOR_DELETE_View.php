<?php

//Clase : PROFESOR_DELETE
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion DELETE.

	class PROFESOR_DELETE{

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
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/PROFESOR_Controller.php' method='post' onsubmit="return comprobar_registro();">
					
				
					DNI : <input type = 'text' name = 'DNI' id = 'DNI' placeholder = '' size = '9' maxlength="9" value = '<?php echo $this->tupla['DNI']; ?>' onblur="" readonly ><br>
				
					<span key="Nombre" class="translate"></span><?php //['Nombre']?> : <input type = 'text' name = 'NOMBREPROFESOR' id = 'NOMBREPROFESOR' placeholder = '' size = '15' maxlength="15" value = '<?php echo $this->tupla['NOMBREPROFESOR']; ?>' readonly ><br>
				
					<span key="Apellidos" class="translate"></span><?php //['Apellidos']?> : <input type = 'text' name = 'APELLIDOSPROFESOR' id = 'APELLIDOSPROFESOR'  size = '30' maxlength="30" value = '<?php echo $this->tupla['APELLIDOSPROFESOR']; ?>' readonly  ><br>
				
					<span key="AreaProfesor" class="translate"></span><?php //['AreaProfesor']?> : <input type = 'text' name = 'AREAPROFESOR' id = 'AREAPROFESOR'  size = '60' maxlength="60" value = '<?php echo $this->tupla['AREAPROFESOR']; ?>'  readonly ><br>
				
					<span key="DepartamentoProfesor" class="translate"></span><?php //['DepartamentoProfesor']?> : <input type = 'text' name = 'DEPARTAMENTOPROFESOR' id = 'DEPARTAMENTOPROFESOR' size = '60' maxlength="60" value = '<?php echo $this->tupla['DEPARTAMENTOPROFESOR']; ?>' readonly ><br>



					<button id=actionbtn type='submit' name='action' value='DELETE'><img id=icon src='../View/Icons/DELETE.png'></button>

			</form>
				
		
			<a id='btn'href='../Controller/PROFESOR_Controller.php'><img id=icon src='../View/Icons/BACK.png'> </a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	