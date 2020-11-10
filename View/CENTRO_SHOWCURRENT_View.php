<?php
//Clase : CENTRO_SHOWCURRENT
//Creado el : 29-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SHOWCURRENT.
//-------------------------------------------------------

	class CENTRO_SHOWCURRENT{

//Constructor
		function __construct($tupla){	
			$this->tupla = $tupla;
			$this->render();
		}

		function render(){
//Función que contiene las lineas de codigo que printan la informacion.
			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="SHOWCURRENT" class="translate"></span><?php //['SHOWCURRENT']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/CENTRO_Controller.php' method='post' onsubmit="return comprobar_registro();">
											
			 		<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']; ?> : <input type = 'text' name = 'CODCENTRO' id = 'CODCENTRO' placeholder = '' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODCENTRO']; ?>' onblur="" readonly><br>
					<span key="Codedificio" class="translate"></span><?php //['Codedificio']; ?> : <input type = 'text' name = 'CODEDIFICIO' id = 'CODEDIFICIO' placeholder = '' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODEDIFICIO']; ?>' readonly><br>
					<span key="Nombre" class="translate"></span><?php //['Nombre']; ?> : <input type = 'text' name = 'NOMBRECENTRO' id = 'NOMBRECENTRO'  size = '50' maxlength="50" value = '<?php echo $this->tupla['NOMBRECENTRO']; ?>'  readonly><br>
					<span key="Direccion" class="translate"></span><?php //['Direccion']; ?> : <input type = 'text' name = 'DIRECCIONCENTRO' id = 'DIRECCIONCENTRO'  size = '150' maxlength="150" value = '<?php echo $this->tupla['DIRECCIONCENTRO']; ?>' readonly ><br>
					Responsable: <input type = 'text' name = 'RESPONSABLECENTRO' id = 'RESPONSABLECENTRO' size = '60' maxlength="60" value = '<?php echo $this->tupla['RESPONSABLECENTRO']; ?>' readonly><br>

		
			</form>
				
		
			<a id='btn'href='../Controller/CENTRO_Controller.php'><img id=icon src='../View/Icons/BACK.png'> </a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	