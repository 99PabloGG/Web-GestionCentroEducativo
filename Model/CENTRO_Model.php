<?php

//Clase : CENTRO_Model
//Creado el : 01-10-2019
//Creado por: 70ky5e
//-------------------------------------------------------

//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------

class CENTRO_Model {
    //Definimos las variables
    var $CODCENTRO; //variable que guarda el código de centro
    var $CODEDIFICIO; //variable que guarda el código de edificio
    var $NOMBRECENTRO; //variable que guarda el nombre de centro
    var $DIRECCIONCENTRO; //variable que guarda la dirección de centro
    var $RESPONSABLECENTRO; //variable que guarda el responsable del centro
	var $mysqli;//variable que guarda los valores de la base de datos
//Constructor
    function __construct($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO){

       
    $this->CODCENTRO = $CODCENTRO;
    $this->CODEDIFICIO = $CODEDIFICIO;
     $this->NOMBRECENTRO = $NOMBRECENTRO;
    $this->DIRECCIONCENTRO = $DIRECCIONCENTRO;
    $this->RESPONSABLECENTRO = $RESPONSABLECENTRO;
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
	if ($this->Comprobar_codcentro() &
		$this->Comprobar_codedificio() &
		$this->Comprobar_nombrecentro() &
		$this->Comprobar_direccioncentro() &
		$this->Comprobar_responsablecentro()
		)
	{
		return true;
	}
	//si no
	else
		{	//devuelve error
			return $this->erroresdatos;
		}
}

//funcion comprobar codcentro
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codcentro()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->CODCENTRO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODCENTRO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->CODCENTRO)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODCENTRO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->CODCENTRO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODCENTRO");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números y el “-”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	
	return $correcto;//se devuelve el resultado
}


//funcion comprobar codedificio
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codedificio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->CODEDIFICIO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODEDIFICIO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->CODEDIFICIO)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODEDIFICIO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->CODEDIFICIO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODEDIFICIO");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números y el “-”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;//se devuelve el resultado
}

//funcion comprobar nombrecentro
//alfanbetico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_nombrecentro()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->NOMBRECENTRO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NOMBRECENTRO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->NOMBRECENTRO)>50)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NOMBRECENTRO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->NOMBRECENTRO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NOMBRECENTRO");
		//guarda un mensaje de error
		array_push($error, "00030");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	
	return $correcto; //se devuelve el resultado
}

//funcion comprobar direccion centro
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_direccioncentro()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->DIRECCIONCENTRO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DIRECCIONCENTRO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->DIRECCIONCENTRO)>150)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DIRECCIONCENTRO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9 ºª\/]+$/",$this->DIRECCIONCENTRO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DIRECCIONCENTRO");
		//guarda un mensaje de error
		array_push($error, "00050");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos y espacios, números y los símbolos  “- / º ª”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}


	
	return $correcto; //devuelve el resultado
}

//funcion comprobar responsable centro
//alfabetico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_responsablecentro()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->RESPONSABLECENTRO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "RESPONSABLECENTRO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->RESPONSABLECENTRO)>60)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "RESPONSABLECENTRO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->RESPONSABLECENTRO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "RESPONSABLECENTRO");
		//guarda un mensaje de error
		array_push($error, "00030");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos");

		//guarda un mensaje de error
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
	//comprobamos que no exista en la base de datos un centro con el código que queremos añadir
	//si se cumple la condicion
	if ($this->Comprobar_atributos() === true){
		$sql = "select * from CENTRO where CODCENTRO = '$this->CODCENTRO'";
		//si hay un error en la consulta devuelve un mensaje de error
		//si se cumple la condicion
		if (!$result = $this->mysqli->query($sql))
		{// existe el centro devuelve mensaje de que ya existe
			return 'Error de gestor de base de datos';
		}

		//si se cumple la condicion
		if ($result->num_rows == 1){  // existe el centro devuelve mensaje de que ya existe
				return 'Inserción fallida: el elemento ya existe';//devuelve el mensaje
			}

		$sql = "INSERT INTO CENTRO (		 			
						CODCENTRO, 
						CODEDIFICIO,
                        NOMBRECENTRO,
                        DIRECCIONCENTRO,
                        RESPONSABLECENTRO) 
				VALUES (
						'$this->CODCENTRO',
                        '$this->CODEDIFICIO',
                        '$this->NOMBRECENTRO',
                        '$this->DIRECCIONCENTRO',
                        '$this->RESPONSABLECENTRO')";
//si hay algún error en la consulta muestra mensaje de error
		//si se cumple la condicion
		if (!$this->mysqli->query($sql)) {
			return 'Error de gestor de base de datos';//devuelve el mensaje
		}
		//si no
		else{
			return 'Inserción realizada con éxito'; //operacion de insertado correcta
		}	
	}//si no
	else{
		return $this->erroresdatos;//devuelve el mensaje
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
			FROM CENTRO
			WHERE (
					(CODCENTRO LIKE '%$this->CODCENTRO%')&&
                    (CODEDIFICIO LIKE '%$this->CODEDIFICIO%')&&
                    (NOMBRECENTRO LIKE '%$this->NOMBRECENTRO%')&&
                    (DIRECCIONCENTRO LIKE '%$this->DIRECCIONCENTRO%')&&
                    (RESPONSABLECENTRO LIKE '%$this->RESPONSABLECENTRO%')
					
				  )";
  	//comprobamos que la consulta se haya echo correctamente
	//si se cumple la condicion
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
//comprobamos si existe 
    $sql = "SELECT * FROM CENTRO WHERE CODCENTRO= '$this->CODCENTRO';";
    //si se cumple la condicion
    if($result = $this->mysqli->query($sql)){
	    //si se cumple la condicion
	    if ($result->num_rows == 1)
	    {//si existe

			$sql = "SELECT * FROM TITULACION WHERE CODCENTRO= '$this->CODCENTRO';";//comprobamos si tiene alguna titulación //vinculada
			$result = $this->mysqli->query($sql);//si tiene alguna titulación vinculada devolvemos un mensaje de error
				//si se cumple la condicion
				if ($result->num_rows >= 1)
				{
					$resultado = 'Error de gestor de base de datos';
				//si no comprobamos si tiene algún espacio asociado
				}else{

					$sql = "SELECT * FROM ESPACIO WHERE CODCENTRO= '$this->CODCENTRO';";
					$result = $this->mysqli->query($sql);
					//si tiene algún espacio asociado devuelve mensaje de error
						//si se cumple la condicion
						if ($result->num_rows >= 1)
							{
								$resultado = 'Error de gestor de base de datos';
							//si no procedemos a borrar	
							}else{		

								$sql = "	DELETE FROM 
											CENTRO
											WHERE(
											CODCENTRO = '$this->CODCENTRO'
											)";
								//si se cumple la condicion
								if ($this->mysqli->query($sql)){
									$resultado = 'Borrado realizado con éxito';
								}
						}
					}
			}
			// si no existe guardamos en la variable resultado un mensaje de error
			
			else{
			$resultado = 'Centro no existe';//devolvemos el resultado
		}
	}
	//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}

	return $resultado;//devuelve el mensaje
}

// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{
	//buscamos todos los atributos de la tupl
    $sql = "SELECT *
			FROM CENTRO
			WHERE (
				(CODCENTRO = '$this->CODCENTRO') 
			)";
	//si no se ejecuta con éxito devuelve mensaje de error
	//si se cumple la condicion
	if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';
	}//si no
	else//si se ejecuta con éxito
	{
		$tupla = $resultado->fetch_array();//guardamos el resultado de la busqueda en la variable tupla
	}
	return $tupla;//devolvemos la información de ese centro
}

// funcion RellenaDatosPorEdificio: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatosPorEdificio()
{
    $sql = "SELECT *
			FROM CENTRO
			WHERE (
				(CODEDIFICIO = '$this->CODEDIFICIO') 
			)";
	//si se ha actualizado guardamos un mensaje de éxito en la variable resultado
	//si se cumple la condicion
	if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';
	}
	return $resultado;//devuelve el mensaje
}


// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//si los atributos estan comprobado
	if ($this->Comprobar_atributos() === true){
	$sql = "SELECT * FROM CENTRO WHERE CODCENTRO= '$this->CODCENTRO'";
    

    $result = $this->mysqli->query($sql);
    //actualizamos los datos
    //si se cumple la condicion
    if ($result->num_rows == 1) {
		$sql = "UPDATE CENTRO 
				SET 
				CODCENTRO = '$this->CODCENTRO',
				CODEDIFICIO = '$this->CODEDIFICIO',
				NOMBRECENTRO = '$this->NOMBRECENTRO',
				DIRECCIONCENTRO = '$this->DIRECCIONCENTRO',
				RESPONSABLECENTRO = '$this->RESPONSABLECENTRO' 
				WHERE 
				CODCENTRO= '$this->CODCENTRO'";
		//si se ha actualizado guardamos un mensaje de éxito en la variable resultado
		//si se cumple la condicion
		if ($this->mysqli->query($sql))
		{
			$resultado = 'Actualización realizada con éxito'; 
		}
		//si no
		else//si no guardamos un mensaje de error en la variable resultado
		{
			$resultado = 'Error de gestor de base de datos';
		}
		
	}

	//si no
	else 
	{
		$resultado = 'No existe en la base de datos';
	}
	return $resultado;//devuelve el mensaje
	}//si no
	else{
		return $this->erroresdatos;//devuelve el mensaje
	}
}


}//fin de clase

?>