<?php 

// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad USUARIOS
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad USUARIOS

include_once '../Model/USUARIOS_Model.php';

function USUARIOS_VALIDACION_test(){
    
    global $ERRORS_array_test;
// creo array de almacen de test individual
	$USUARIOS_array_test1 = array();

// Comprobar el login no existe
//-------------------------------------------------------------------------------

	$login = 'loginerror';
	$password = 'password';
	$dni = '44497122B';
	$nombre = 'Javier';
	$apellidos = 'Rodeiro';
	$telefono = '654321654';
	$email = 'javier@javier.com';
	$FechaNacimiento = '2019-12-01';
	$fotopersonal = 'ruta.png';
	$sexo = 'hombre';

	$usuarios = new USUARIOS_Model($login,$password,$dni,$nombre,$apellidos,$telefono,$email,$FechaNacimiento,$fotopersonal,$sexo);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'login';
	$USUARIOS_array_test1['error'] = 'El formato de login es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';
    
    $USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_login();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);


	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'password';
	$USUARIOS_array_test1['error'] = 'El formato de password es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';
	
	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_password();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'dni';
	$USUARIOS_array_test1['error'] = 'El formato de dni es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';
	
	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_dni();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'nombre';
	$USUARIOS_array_test1['error'] = 'El formato de nombre es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_nombre();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $USUARIOS_array_test1);

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'apellidos';
	$USUARIOS_array_test1['error'] = 'El formato de apellidos es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	
	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_apellidos();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'email';
	$USUARIOS_array_test1['error'] = 'El formato de email es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_email();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'telefono';
	$USUARIOS_array_test1['error'] = 'El formato de telefono es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_telefono();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'fechanacimiento';
	$USUARIOS_array_test1['error'] = 'El formato de fechanacimiento es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_fecha();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);


	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'sexo';
	$USUARIOS_array_test1['error'] = 'El formato de sexo es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_sexo();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'TODOS';
	$USUARIOS_array_test1['error'] = 'El formato de todos los atributos es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_atributos();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);


	$login = 'login error';
	$password = 'passw ord';
	$dni = '44497122A';
	$nombre = 'Javi2er';
	$apellidos = 'Rod4eiro';
	$telefono = '654321a654';
	$email = 'javier@com';
	$FechaNacimiento = '2019/12/25';
	$fotopersonal = 'ru';
	$sexo = 'homb2re';    

	$usuarios = new USUARIOS_Model($login,$password,$dni,$nombre,$apellidos,$telefono,$email,$FechaNacimiento,$fotopersonal,$sexo);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'login';
	$USUARIOS_array_test1['error'] = 'El formato de login no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';
    
    $USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_login();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);


	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'password';
	$USUARIOS_array_test1['error'] = 'El formato de password no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';
	
	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_password();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'dni';
	$USUARIOS_array_test1['error'] = 'El formato de dni no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';
	
	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_dni();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'nombre';
	$USUARIOS_array_test1['error'] = 'El formato de nombre no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_nombre();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $USUARIOS_array_test1);

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'apellidos';
	$USUARIOS_array_test1['error'] = 'El formato de apellidos no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	
	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_apellidos();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'email';
	$USUARIOS_array_test1['error'] = 'El formato de email no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_email();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'telefono';
	$USUARIOS_array_test1['error'] = 'El formato de telefono no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_telefono();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
	
	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'fechanacimiento';
	$USUARIOS_array_test1['error'] = 'El formato de fechanacimiento es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'true';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_fecha();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);


	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'sexo';
	$USUARIOS_array_test1['error'] = 'El formato de sexo no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'false';
	$USUARIOS_array_test1['error_obtenido'] = '';
    $USUARIOS_array_test1['resultado'] = '';

	$USUARIOS_array_test1['error_obtenido'] = $usuarios->Comprobar_sexo();

    if (($USUARIOS_array_test1['error_obtenido'] = $USUARIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);

	$USUARIOS_array_test1['entidad'] = 'USUARIOS';	
	$USUARIOS_array_test1['atributo'] = 'TODOS';
	$USUARIOS_array_test1['error'] = 'El formato de los atributos no es correcto';
	$USUARIOS_array_test1['error_esperado'] = 'array';
	$USUARIOS_array_test1['error_obtenido'] = '';
	$USUARIOS_array_test1['resultado'] = '';
	
	$USUARIOS_array_test1['error_obtenido'] = gettype($usuarios->Comprobar_atributos());
    if ($USUARIOS_array_test1['error_obtenido'] === $USUARIOS_array_test1['error_esperado'])
	{
		$USUARIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$USUARIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $USUARIOS_array_test1);
    
}

USUARIOS_VALIDACION_test();
?>