<?php 
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad ESPACIO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad ESPACIO
include_once '../Model/ESPACIO_Model.php';

function ESPACIO_VALIDACION_test(){
    
    global $ERRORS_array_test;
// creo array de almacen de test individual
	$ESPACIOS_array_test1 = array();

// Comprobar el login no existe
//-------------------------------------------------------------------------------

	$codespacio = 'logine-2r';
	$codedificio = 'sad22';
	$codcentro = 'ssss233';
    $tipo = 'DESPACHO';
    $superficieespacio = '123';
    $numinventarioespacio = '12333';

	$espacios = new ESPACIO_Model($codespacio,$codedificio,$codcentro,$tipo,$superficieespacio,$numinventarioespacio);
	
	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'codespacio';
	$ESPACIOS_array_test1['error'] = 'El formato de codespacio es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';
    
    $ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_codespacio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);


	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'codedificio';
	$ESPACIOS_array_test1['error'] = 'El formato de codedificio es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';
	
	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_codedificio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);

	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'codcentro';
	$ESPACIOS_array_test1['error'] = 'El formato de codcentro es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';
	
	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_codcentro();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);
	
	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'tipo';
	$ESPACIOS_array_test1['error'] = 'El formato de tipo es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_tipo();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $ESPACIOS_array_test1);

    $ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'superficieespacio';
	$ESPACIOS_array_test1['error'] = 'El formato de superficieespacio es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_superficieespacio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $ESPACIOS_array_test1);


    $ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'numinventarioespacio';
	$ESPACIOS_array_test1['error'] = 'El formato de numinventarioespacio es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_numinventarioespacio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $ESPACIOS_array_test1);


	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'TODOS';
	$ESPACIOS_array_test1['error'] = 'El formato de todos los atributos es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'true';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_atributos();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);


	$codespacio = 'login e-2r';
	$codedificio = 'sa d22';
	$codcentro = 'sss s233';
    $tipo = 'DES2PACHO';
    $superficieespacio = '12c3';
    $numinventarioespacio = '12c333';

	$espacios = new ESPACIO_Model($codespacio,$codedificio,$codcentro,$tipo,$superficieespacio,$numinventarioespacio);
	
	
	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'codespacio';
	$ESPACIOS_array_test1['error'] = 'El formato de codespacio no es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'false';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';
    
    $ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_codespacio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);


	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'codedificio';
	$ESPACIOS_array_test1['error'] = 'El formato de codedificio no es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'false';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';
	
	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_codedificio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);

	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'codcentro';
	$ESPACIOS_array_test1['error'] = 'El formato de codcentro no es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'false';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';
	
	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_codcentro();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);
	
	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'tipo';
	$ESPACIOS_array_test1['error'] = 'El formato de tipo no es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'false';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_tipo();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $ESPACIOS_array_test1);

    $ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'superficieespacio';
	$ESPACIOS_array_test1['error'] = 'El formato de superficieespacio es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'false';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_superficieespacio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $ESPACIOS_array_test1);


    $ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'numinventarioespacio';
	$ESPACIOS_array_test1['error'] = 'El formato de numinventarioespacio es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'false';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = $espacios->Comprobar_numinventarioespacio();

    if (($ESPACIOS_array_test1['error_obtenido'] = $ESPACIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $ESPACIOS_array_test1);


	$ESPACIOS_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIOS_array_test1['atributo'] = 'TODOS';
	$ESPACIOS_array_test1['error'] = 'El formato de los atributos no es correcto';
	$ESPACIOS_array_test1['error_esperado'] = 'array';
	$ESPACIOS_array_test1['error_obtenido'] = '';
    $ESPACIOS_array_test1['resultado'] = '';

	$ESPACIOS_array_test1['error_obtenido'] = gettype($espacios->Comprobar_atributos());
    if ($ESPACIOS_array_test1['error_obtenido'] === $ESPACIOS_array_test1['error_esperado'])
	{
		$ESPACIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIOS_array_test1);
    
}

ESPACIO_VALIDACION_test();
?>