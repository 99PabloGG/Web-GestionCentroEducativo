<?php
//Clase : EDIFICIO_SHOWCURRENT
//Creado el : 28-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SHOWCURRENT.
//-------------------------------------------------------

	class EDIFICIO_SHOWCURRENT{

//Constructor
		function __construct($tupla){	
			$this->tupla = $tupla;
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SHOWCURRENT" class="translate"></span><?php //['SHOWCURRENT']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/EDIFICIO_Controller.php' method='post' onsubmit="return comprobar_registro();">
			
					<span key="Codedificio" class="translate"></span><?php //['Codedificio']; ?> : <input type = 'text' name = 'CODEDIFICIO' id = 'CODEDIFICIO' placeholder = '' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODEDIFICIO']; ?>' readonly><br>
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?> : <input type = 'text' name = 'NOMBREEDIFICIO' id = 'NOMBREEDIFICIO'  size = '50' maxlength="50" value = '<?php echo $this->tupla['NOMBREEDIFICIO']; ?>' readonly ><br>
					<span key="Direccion" class="translate"></span><?php //['Direccion']; ?> : <input type = 'text' name = 'DIRECCIONEDIFICIO' id = 'DIRECCIONEDIFICIO'  size = '150' maxlength="150" value = '<?php echo $this->tupla['DIRECCIONEDIFICIO']; ?>' readonly ><br>
					<span key="CampusEdificio" class="translate"></span><?php //['CampusEdificio']; ?> : <input type = 'text' name = 'CAMPUSEDIFICIO' id = 'CAMPUSEDIFICIO' size = '10' maxlength="10" value = '<?php echo $this->tupla['CAMPUSEDIFICIO']; ?>' readonly><br>

		
			</form>
				
		
			<a id='btn'href='../Controller/EDIFICIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	