<?php
//Clase: MESSAGE_View
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Muestra mensajes varios
//-------------------------------------------------------

class MESSAGE{

	private $string; 
	private $volver;
//Constructor
	function __construct($string, $volver){
		$this->strings = $string;
		$this->volver = $volver;	
		$this->render();
	}
//Función que contiene las lineas de codigo que printan la informacion.
	function render(){

		include '../View/Header.php';
?>
<br>
<br>
<br>
<p>
    <?php if(is_array($this->strings)){
				foreach($this->strings as $string){ 
					foreach($string as $string2){ 
	?>
    <H3>
       <span key="<?php echo $string2 ?>" class="translate"></span><br>
    <H3>
            <?php 
					}
				} 
		}else{
			?>
            <H3>
                <span key="<?php echo $this->strings ?>" class="translate"></span>
            </H3>
            <?php } ?>
</p>
<br>
<br>
<br>


<?php

		echo '<a id=btn href=\'' . $this->volver . "''><img id=icon src='../View/Icons/BACK.png'></a>";
		include '../View/Footer.php';
	} //fin metodo render

}
