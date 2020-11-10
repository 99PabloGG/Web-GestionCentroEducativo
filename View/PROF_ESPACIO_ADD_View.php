<?php
//Clase: PROF_ESPACIO_ADD
//Creado el : 04-10-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion ADD.
//-------------------------------------------------------

	class PROF_ESPACIO_ADD{
		var $pepe;	//boleana indicativa
//Constructor
		function __construct($valores1,$valores2,$valores3){	
			$this->valores1 = $valores2;
			$this->valores2 = $valores1;
			$this->valores3 = $valores3;
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){
			$pepe = 'false';

			include '../View/Header.php'; //header necesita los strings
		?>
			<h1><span key="ADD" class="translate"></span><?php //['ADD']; ?></h1>	
			<form class="formulario" enctype="multipart/form-data" name = 'Form' action='../Controller/PROF_ESPACIO_Controller.php' method='post' onsubmit="return comprobar_registro();">
				
					DNI : <select name="DNI" required>						        
										<?php
										foreach($this->valores1 as $fila1)  { 
										?>
												<?php 
												$pepe='false';
												?>
											<?php
											foreach($this->valores3 as $fila3)  { 
											?>
											<?php
											if($fila1['DNI']==$fila3['DNI']) {
											?>
												<?php 
												$pepe='true';
												?>
											<?php
											}
											?>
											
										<?php
										}
										?>
										<?php
											if($pepe == 'false') {
											?>
												<option value="<?php echo $fila1['DNI'] ?>"><?php echo $fila1['DNI'] ?></option>
											<?php
											}
											?>
									<?php
										}
										?>
									  </select><br>

					<span key="CodigoEspacio" class="translate"></span><?php //['CodigoEspacio']?> : <select name="CODESPACIO" required>						        
										<?php
										foreach($this->valores2 as $fila2)  { 
										?>
										<option value="<?php echo $fila2['CODESPACIO'] ?>"><?php echo $fila2['CODESPACIO'] ?></option>
										<?php
										}
										?>
									  </select><br>

					<button id=actionbtn type='submit' name='action' value='ADD'><img id=icon src='../View/Icons/ADD.png'></button>

			</form>
		
			<a id='btn'href='../Controller/PROF_ESPACIO_Controller.php'><img id=icon src='../View/Icons/BACK.png'></a>
		<br><br><br><br>
		<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	