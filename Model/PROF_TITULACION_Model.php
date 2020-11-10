<?php
//Clase : PROF_TITULACION_Model
//Creado el : 27-09-2017
//Creado por: 70ky5e

//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------

class PROF_TITULACION_Model {
        	//Definimos las variables
    	var $DNI; //variable que guarda el DNI de profesor
        var $CODTITULACION; //variable que guarda el código de la titulación
		var $ANHOACADEMICO; //variable que guarda el año academico
		var $mysqli;//variable que guarda los valores de la base de datos
           //Constructor
        function __construct($DNI,$CODTITULACION,$ANHOACADEMICO){

       
            $this->DNI = $DNI;
            $this->CODTITULACION = $CODTITULACION;
			$this->ANHOACADEMICO = $ANHOACADEMICO;
          
			$this->erroresdatos = array(); 

	//$this->Comprobar_atributos();

	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB();
}
// function Comprobar_atributos()
// Comprueba el formato de atributos
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_atributos()
{
	//realiza la comprobacion
	if ($this->Comprobar_DNI() &
        $this->Comprobar_codtitulacion() &
		$this->Comprobar_anhoacademico()
		)
	{
		return true;
	}
	//si no
	else
		{
			return $this->erroresdatos;
		}
}
// function Comprobar_DNI()
// Comprueba el formato de DNI
//**********X
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_DNI()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->DNI)!=9)
	{		
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DNI");
		//guardamos el mensaje de error
		array_push($error, "00011");
		//guardamos el mensaje de error
		array_push($error, "Dni no válido");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	//realiza la comprobacion
	if ((!preg_match("/^\d{8}[a-zA-Z]$/",$this->DNI)) || (!$this->validar_letra($this->DNI))){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DNI");
		//guardamos el mensaje de error
		array_push($error, "00011");
		//guardamos el mensaje de error
		array_push($error, "Formato dni erróneo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}


	return $correcto;
}
// function validar_letra()
// Comprueba el formato de letra
//ALFABETICO
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function validar_letra($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	//realiza la comprobacion
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		return true;
	}//si no
	else{
		return false;
	}
}	
// function Comprobar_codtitulacion()
// Comprueba el formato de codtitulacion
//ALFABETICO
// devuelve un true o un false y rellena en caso de error el array de errores de datos
	function Comprobar_codtitulacion()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->CODTITULACION)<3)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "CODTITULACION");
		//guardamos el mensaje de error
		array_push($error, "00003");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (strlen($this->CODTITULACION)>10)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "CODTITULACION");
		//guardamos el mensaje de error
		array_push($error, "00002");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ0-9]+$/",$this->CODTITULACION)){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "CODTITULACION");
		//guardamos el mensaje de error
		array_push($error, "00040");
		//guardamos el mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}
// function Comprobar_anhoacademico()
// Comprueba el formato de anhoacademico
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_anhoacademico()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->ANHOACADEMICO)<3)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "ANHOACADEMICO");
		//guardamos el mensaje de error
		array_push($error, "00003");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (strlen($this->ANHOACADEMICO)>10)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "ANHOACADEMICO");
		//guardamos el mensaje de error
		array_push($error, "00002");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (!preg_match("/^[0-9]{4}\-[0-9]{4}$/",$this->ANHOACADEMICO)){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "ANHOACADEMICO");
		//guardamos el mensaje de error
		array_push($error, "00110");
		//guardamos el mensaje de error
		array_push($error, "Solo se permiten dddd-dddd donde d es un dígito");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}
	
//Metodo ADD
//Inserta en la tabla  de la bd  los valores
// de los atributos del objeto. Comprueba si la clave/s esta vacia y si 
//existe ya en la tabla
function ADD()
{
	//realiza la comprobacion
	if ($this->Comprobar_atributos() === true){
		$sql = "select * from PROF_TITULACION where DNI = '".$this->DNI."' AND CODTITULACION = '".$this->CODTITULACION."'";

		//realiza la comprobacion
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}

		//realiza la comprobacion
		if ($result->num_rows == 1){  // existe el usuario
				return 'Inserción fallida: el elemento ya existe';
			}

		$sql = "INSERT INTO PROF_TITULACION (
			 			DNI,
                        CODTITULACION,
						ANHOACADEMICO
                       ) 
				VALUES (
						'$this->DNI',
                        '$this->CODTITULACION',
						'$this->ANHOACADEMICO'
                        )";

		//realiza la comprobacion
		if (!$this->mysqli->query($sql)) {
			return 'Error de gestor de base de datos';
		}
		//si no
		else{
			return 'Inserción realizada con éxito'; //operacion de insertado correcta
		}
	}//si no
	else{
		return $this->erroresdatos;
	}
}
    

//funcion de destrucción del objeto: se ejecuta automaticamente
//al finalizar el script
function __destruct()
{

}


//funcion SEARCH: hace una búsqueda en la tabla con
//los datos proporcionados. Si van vacios devuelve todos
function SEARCH()
{

	$sql = "SELECT *
			FROM PROF_TITULACION
			WHERE (
						 (DNI LIKE '%$this->DNI%')&&
                         (CODTITULACION LIKE '%$this->CODTITULACION%')&&
						 (ANHOACADEMICO LIKE '%$this->ANHOACADEMICO%')
						 
                         
			)
	";
	//realiza la comprobacion
	if (!$resultado = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}
	return $resultado;
    
}

//funcion DELETE : comprueba que la tupla a borrar existe y una vez
// verificado la borra
function DELETE()
{
	    
    $sql = "SELECT * FROM PROF_TITULACION WHERE DNI= '$this->DNI' AND CODTITULACION = '".$this->CODTITULACION."';";
    //realiza la comprobacion
    if($result = $this->mysqli->query($sql)){
	    //realiza la comprobacion
	    if ($result->num_rows == 1)
	    {
				$sql = "	DELETE FROM 
					PROF_TITULACION
				WHERE(
					DNI = '$this->DNI' AND
				CODTITULACION = '".$this->CODTITULACION."'
				)
				";
		   	//realiza la comprobacion
		   	if ($this->mysqli->query($sql))
			{
				$resultado = 'Borrado realizado con éxito';
			}//si no
			else{
				$resultado = 'Error de gestor de base de datos';
			} 
		}//si no
		else{
			$resultado = 'Centro no existe';
		}
	}
		//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;
}

// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{
    $sql = "SELECT *
			FROM PROF_TITULACION
			WHERE (
				(DNI = '$this->DNI' AND CODTITULACION = '".$this->CODTITULACION."') 
			)";

	//realiza la comprobacion
	if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';
	}//si no
	else
	{
		$tupla = $resultado->fetch_array();
	}
	return $tupla;
}

// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//realiza la comprobacion
	if ($this->Comprobar_atributos() === true){
	$sql = "UPDATE PROF_TITULACION SET DNI = '$this->DNI',CODTITULACION = '$this->CODTITULACION',ANHOACADEMICO = '$this->ANHOACADEMICO' WHERE DNI= '$this->DNI' AND CODTITULACION = '".$this->CODTITULACION."'";
	//realiza la comprobacion
	if ($this->mysqli->query($sql))
	{
		$resultado = 'Actualización realizada con éxito';
	}
	//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;
	}//si no
	else{
		return $this->erroresdatos;
	}
}


}//fin de clase

?>