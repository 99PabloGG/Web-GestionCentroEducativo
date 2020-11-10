<?php 
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad CENTRO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad CENTRO
include_once '../Model/CENTRO_Model.php';

function CENTRO_VALIDACION_test(){
    
    global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTROS_array_test1 = array();

// Comprobar el login no existe
//-------------------------------------------------------------------------------

	$codcentro = 'logine-2r';
	$codedificio = 'cent22ro';
	$nombrecentro = 'Faces';
    $direccioncentro = 'ourense rua 2 1ºA';
    $responsablecentro = 'Juan Fernandez';

	$centros = new CENTRO_Model($codcentro,$codedificio,$nombrecentro,$direccioncentro,$responsablecentro);
	
	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'codcentro';
	$CENTROS_array_test1['error'] = 'El formato de codcentro es correcto';
	$CENTROS_array_test1['error_esperado'] = 'true';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';
    
    $CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_codcentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);


	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'codedificio';
	$CENTROS_array_test1['error'] = 'El formato de codedificio es correcto';
	$CENTROS_array_test1['error_esperado'] = 'true';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';
	
	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_codedificio();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);

	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'nombrecentro';
	$CENTROS_array_test1['error'] = 'El formato de nombrecentro es correcto';
	$CENTROS_array_test1['error_esperado'] = 'true';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';
	
	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_nombrecentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);
	
	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'direccioncentro';
	$CENTROS_array_test1['error'] = 'El formato de direccioncentro es correcto';
	$CENTROS_array_test1['error_esperado'] = 'true';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';

	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_direccioncentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $CENTROS_array_test1);

    $CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'responsablecentro';
	$CENTROS_array_test1['error'] = 'El formato de responsablecentro es correcto';
	$CENTROS_array_test1['error_esperado'] = 'true';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';

	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_responsablecentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $CENTROS_array_test1);


	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'TODOS';
	$CENTROS_array_test1['error'] = 'El formato de todos los atributos es correcto';
	$CENTROS_array_test1['error_esperado'] = 'true';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';

	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_atributos();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);


    $codcentro = 'logi ne-2r';
	$codedificio = 'cen t22ro';
	$nombrecentro = 'Faces22';
    $direccioncentro = 'ourense rua 2 ¨ 1ºA';
    $responsablecentro = 'Juan 222Fernandez';

	$centros = new CENTRO_Model($codcentro,$codedificio,$nombrecentro,$direccioncentro,$responsablecentro);
	
	
	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'codcentro';
	$CENTROS_array_test1['error'] = 'El formato de codcentro no es correcto';
	$CENTROS_array_test1['error_esperado'] = 'false';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';
    
    $CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_codcentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);


	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'codedificio';
	$CENTROS_array_test1['error'] = 'El formato de codedificio no es correcto';
	$CENTROS_array_test1['error_esperado'] = 'false';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';
	
	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_codedificio();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);

	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'nombrecentro';
	$CENTROS_array_test1['error'] = 'El formato de nombrecentro no es correcto';
	$CENTROS_array_test1['error_esperado'] = 'false';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';
	
	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_nombrecentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);
	
	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'direccioncentro';
	$CENTROS_array_test1['error'] = 'El formato de direccioncentro no es correcto';
	$CENTROS_array_test1['error_esperado'] = 'false';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';

	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_direccioncentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $CENTROS_array_test1);

    $CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'responsablecentro';
	$CENTROS_array_test1['error'] = 'El formato de responsablecentro no es correcto';
	$CENTROS_array_test1['error_esperado'] = 'false';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';

	$CENTROS_array_test1['error_obtenido'] = $centros->Comprobar_responsablecentro();

    if (($CENTROS_array_test1['error_obtenido'] = $CENTROS_array_test1['error_obtenido'] ? 'true' : 'false') === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $CENTROS_array_test1);

	$CENTROS_array_test1['entidad'] = 'CENTRO';	
	$CENTROS_array_test1['atributo'] = 'TODOS';
	$CENTROS_array_test1['error'] = 'El formato de los atributos no es correcto';
	$CENTROS_array_test1['error_esperado'] = 'array';
	$CENTROS_array_test1['error_obtenido'] = '';
    $CENTROS_array_test1['resultado'] = '';

	$CENTROS_array_test1['error_obtenido'] = gettype($centros->Comprobar_atributos());
    if ($CENTROS_array_test1['error_obtenido'] === $CENTROS_array_test1['error_esperado'])
	{
		$CENTROS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTROS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTROS_array_test1);
    
}

CENTRO_VALIDACION_test();
?>