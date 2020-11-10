<?php
//Clase : ESPACIO_SHOWCURRENT
//Creado el :01-10-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SHOWCURRENT.
//-------------------------------------------------------

	class ESPACIO_SHOWCURRENT{

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
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/ESPACIO_Controller.php' method='post' onsubmit="return comprobar_registro();">
	
					<span key="CodigoEspacio" class="translate"></span><?php //['CodigoEspacio']?>: <input type = 'text' name = 'CODESPACIO' id = 'CODESPACIO' placeholder = '' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODESPACIO']; ?>' onblur="" readonly><br>
				
					<span key="CodigoEdificio" class="translate"></span><?php //['CodigoEdificio']?>: <input type = 'text' name = 'CODEDIFICIO' id = 'CODEDIFICIO' placeholder = '' size = '10' maxlength="10" value = '<?php echo $this->tupla['CODEDIFICIO']; ?>' readonly><br>
				
					<span key="CodigoCentro" class="translate"></span><?php //['CodigoCentro']?>: <input type = 'text' name = 'CODCENTRO' id = 'CODCENTRO'  size = '10' maxlength="10" value = '<?php echo $this->tupla['CODCENTRO']; ?>' readonly ><br>
				
					<span key="Tipo" class="translate"></span><?php //['Tipo']?>:<select name="TIPO" required>
								<option value= "<?php echo $this->tupla['TIPO']?>" key="<?php echo $this->tupla['TIPO']?>" class="translate" readonly><?php //[$this->tupla['TIPO']]?> </option></select><br>
					
					<span key="SuperficieEspacio" class="translate"></span><?php //['SuperficieEspacio']?>: <input type = 'text' name = 'SUPERFICIEESPACIO' id = 'SUPERFICIEESPACIO' placeholder = '' size = '4' maxlength="4" value = '<?php echo $this->tupla['SUPERFICIEESPACIO']; ?>' readonly><br>
				
					<span key="NumeroInventarioEspacio" class="translate"></span><?php //['NumeroInventarioEspacio']?>: <input type = 'text' name = 'NUMINVENTARIOESPACIO' id = 'NUMINVENTARIOESPACIO' placeholder = '' size = '8' maxlength="8" value = '<?php echo $this->tupla['NUMINVENTARIOESPACIO']; ?>' readonly><br>
		
			</form>
				
		
			<a id='btn'href='../Controller/ESPACIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	