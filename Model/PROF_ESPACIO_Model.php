<?php

//Clase : PROF_ESPACIO_Modelo
//Creado el : 09-10-2019
//Creado por: 70ky5e
//-------------------------------------------------------
//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------


class PROF_ESPACIO_Model {
        //Definimos las variables
        var $DNI; //variable que guarda el DNI del profesor
        var $CODESPACIO;//variable que guarda el código del espacio del profesor
		var $mysqli;//variable que guarda los valores de la base de datos
       //Constructor
           
        function __construct($DNI,$CODESPACIO){

            $this->DNI = $DNI;
            $this->CODESPACIO = $CODESPACIO;
			$this->erroresdatos = array(); 

	//$this->Comprobar_atributos();

	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB();
}

//funcion comprobar atributos
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_atributos()
{
	//si se cumple la condicion
	if ($this->Comprobar_DNI() &
        $this->Comprobar_codespacio() 
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
	
//funcion comprobar DNI
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_DNI()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->DNI)!=9)
	{		
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DNI");
		//guarda un mensaje de error
		array_push($error, "00011");
		//guarda un mensaje de error
		array_push($error, "Dni no válido");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	//si se cumple la condicion
	if ((!preg_match("/^\d{8}[a-zA-Z]$/",$this->DNI)) || (!$this->validar_letra($this->DNI))){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DNI");
		//guarda un mensaje de error
		array_push($error, "00011");
		//guarda un mensaje de error
		array_push($error, "Formato dni erróneo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}


	return $correcto;
}

//funcion comprobar letra dni
//alfabetico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function validar_letra($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	//si se cumple la condicion
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		return true;
	}//si no
	else{
		return false;
	}
}	

//funcion comprobar codespacio
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codespacio()
{
	$correcto = true;
	//si se cumple la condicion
	if (strlen($this->CODESPACIO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODESPACIO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->CODESPACIO)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODESPACIO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->CODESPACIO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODESPACIO");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números y el “-”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	
	return $correcto; //se devuelve el resultado
}

//Metodo ADD
//Inserta en la tabla  de la bd  los valores
// de los atributos del objeto. Comprueba si la clave/s esta vacia y si 
//existe ya en la tabla
function ADD()
{
	//comprobamos que no exista en la base de datos un espacio y un dni igual al que queremos añadir
	if ($this->Comprobar_atributos() === true){
		$sql = "select * from PROF_ESPACIO where DNI = '".$this->DNI."' AND CODESPACIO = '".$this->CODESPACIO."'";

		//si hay un error en la consulta devuelve un mensaje de error
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';//devuelve el mensaje
		}

		if ($result->num_rows == 1){  // existe el centro devuelve mensaje de que ya existe
				return 'Inserción fallida: el elemento ya existe';
			}
		//si hay algún error en la consulta muestra mensaje de error
		$sql = "INSERT INTO PROF_ESPACIO (DNI,CODESPACIO) 
				VALUES (
						'$this->DNI',
                        '$this->CODESPACIO'
                        )";

		//si se cumple la condicion
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
	//miramos si lo que buscamos está en la base de datos
	$sql = "SELECT *
			FROM PROF_ESPACIO
			WHERE (
						 (DNI LIKE '%$this->DNI%')&&
                         (CODESPACIO LIKE '%$this->CODESPACIO%')
                         
			)
	";
	//comprobamos que la consulta se haya echo correctamente
	if (!$resultado = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';//si hay algún error devuelve un mensaje de error
		}
	return $resultado;//si es correcto devuelve las coincidencias
    
}

//funcion DELETE : comprueba que la tupla a borrar existe y una vez
// verificado la borra
function DELETE()
{
	//comprobamos si existe el dni y el codigo de espacio
    $sql = "SELECT * FROM PROF_ESPACIO WHERE DNI= '$this->DNI' AND CODESPACIO = '".$this->CODESPACIO."';";
    //si se cumple la condicion
    if($result = $this->mysqli->query($sql)){
    //si se cumple la condicion
    	if ($result->num_rows == 1)
    	{//borramos
	   		$sql = "	DELETE FROM PROF_ESPACIO WHERE( DNI = '$this->DNI' AND CODESPACIO = '".$this->CODESPACIO."')";
			//si se borra con exito 
			if ($this->mysqli->query($sql))
			{
			$resultado = 'Borrado realizado con éxito';//guarda mensaje de éxito en la variable resultado
			}
		}
						
		//si no se borra correctamente
		else{
			$resultado = 'Centro no existe';//guarda mensaje de error en la variable resultado
		}
	}
	//si no
	else
		{
			$resultado = 'Error de gestor de base de datos';//guarda mensaje de error en la variable resultado
		}
	return $resultado;//devuelve mensaje
}

// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{//buscamos todos los atributos de la tupla
    $sql = "SELECT *
			FROM PROF_ESPACIO
			WHERE (
				(DNI = '$this->DNI' AND CODESPACIO = '".$this->CODESPACIO."') 
			)";

	//si no se ejecuta con éxito devuelve mensaje de error
			if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';//devuelve el mensaje
	} //si no se ejecuta con éxito 
	else
	{
		$tupla = $resultado->fetch_array();//guardamos el resultado de la busqueda en la variable tupla
	}
	return $tupla;//devolvemos la información de ese centro
}

// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{ //COMPROBAR SI EXISTEN TODOS MEDIANTE EL SELECT
	//si se cumple la condicion
	if ($this->Comprobar_atributos() === true){
	 $sql = "SELECT *
			FROM PROF_ESPACIO
			WHERE (
				(DNI = '$this->DNI' AND CODESPACIO = '".$this->CODESPACIO."') 
			)";
	//si no guardamos un mensaje de error en la variable resultado
			if($result = $this->mysqli->query($sql)){	
	//si se cumple la condicion
	if ($result->num_rows == 0){  // existe el usuario
		$sql = "UPDATE PROF_ESPACIO SET DNI = '$this->DNI',CODESPACIO = '$this->CODESPACIO' WHERE DNI= '$this->DNI' AND CODESPACIO = '".$this->CODESPACIO."'";
	//si se cumple la condicion
		if ($this->mysqli->query($sql))
	{
		$resultado = 'Actualización realizada con éxito';
	}
	//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';//guarda mensaje de error en la variable resultado
	}
	return $resultado;
	}
	//si no
	else
	{
		return 'El elemento no existe en la BD';//devuelve el mensaje
	}
	}//si no
	else{
		return 'Error de gestor de base de datos';//devuelve el mensaje
}
	}//si no
	else{
		return $this->erroresdatos;
	}
}
}//fin de clase

?>