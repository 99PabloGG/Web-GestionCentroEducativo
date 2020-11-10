<?php 

// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad PROFESOR
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad PROFESOR

include_once '../Model/PROFESOR_Model.php';

function PROFESOR_VALIDACION_test(){
    
    global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROFESORES_array_test1 = array();

// Comprobar el login no existe
//-------------------------------------------------------------------------------

	$dni = '12345678Z';
	$nombreprofesor = 'Javier';
	$apellidosprofesor = 'Fernandez de Dios';
    $areaprofesor = 'Integrales';
    $departamentoprofesor = 'Matemáticas';

	$profesores = new PROFESOR_Model($dni,$nombreprofesor,$apellidosprofesor,$areaprofesor,$departamentoprofesor);
	
	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'dni';
	$PROFESORES_array_test1['error'] = 'El formato de dni es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'true';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';
    
    $PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_dni();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);


	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'nombreprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de nombreprofesor es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'true';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';
	
	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_nombreprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);

	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'apellidosprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de apellidosprofesor es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'true';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';
	
	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_apellidosprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);
	
	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'areaprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de areaprofesor es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'true';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';

	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_areaprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $PROFESORES_array_test1);

    $PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'departamentoprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de departamentoprofesor es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'true';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';

	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_departamentoprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $PROFESORES_array_test1);

	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'TODOS';
	$PROFESORES_array_test1['error'] = 'El formato de todos los atributos es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'true';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';

	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_atributos();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);


	$dni = '12345678H';
	$nombreprofesor = 'Javi2er';
	$apellidosprofesor = 'Fernand*ez de Dios';
    $areaprofesor = 'Integ2rales';
    $departamentoprofesor = 'Matemá2ticas';

	$profesores = new PROFESOR_Model($dni,$nombreprofesor,$apellidosprofesor,$areaprofesor,$departamentoprofesor);
	
	
	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'dni';
	$PROFESORES_array_test1['error'] = 'El formato de dni no es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'false';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';
    
    $PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_dni();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);


	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'nombreprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de nombreprofesor no es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'false';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';
	
	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_nombreprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);

	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'apellidosprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de apellidosprofesor no es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'false';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';
	
	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_apellidosprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);
	
	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'areaprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de areaprofesor no es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'false';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';

	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_areaprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $PROFESORES_array_test1);

    $PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'departamentoprofesor';
	$PROFESORES_array_test1['error'] = 'El formato de departamentoprofesor no es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'false';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';

	$PROFESORES_array_test1['error_obtenido'] = $profesores->Comprobar_departamentoprofesor();

    if (($PROFESORES_array_test1['error_obtenido'] = $PROFESORES_array_test1['error_obtenido'] ? 'true' : 'false') === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $PROFESORES_array_test1);


	$PROFESORES_array_test1['entidad'] = 'PROFESOR';	
	$PROFESORES_array_test1['atributo'] = 'TODOS';
	$PROFESORES_array_test1['error'] = 'El formato de los atributos no es correcto';
	$PROFESORES_array_test1['error_esperado'] = 'array';
	$PROFESORES_array_test1['error_obtenido'] = '';
    $PROFESORES_array_test1['resultado'] = '';

	$PROFESORES_array_test1['error_obtenido'] = gettype($profesores->Comprobar_atributos());
    if ($PROFESORES_array_test1['error_obtenido'] === $PROFESORES_array_test1['error_esperado'])
	{
		$PROFESORES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESORES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESORES_array_test1);
    
}

PROFESOR_VALIDACION_test();
?>