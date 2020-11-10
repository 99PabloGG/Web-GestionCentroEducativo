<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad ESPACIO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad ESPACIO
include_once '../Model/ESPACIO_Model.php';


function ESPACIO_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$ESPACIO_array_test1 = array();

// Comprobar el login existe
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'ADD';
	$ESPACIO_array_test1['error'] = 'El espacio ya existe';
	$ESPACIO_array_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
	
	$codedificio = 'GA01517';
	$campusedificio = 'AUGA';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'GA01517';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$NUMINVENTARIOESPACIO = '1212';

// creo el modelo
	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
// inserto la tupla
	$espacios->ADD();

	$ESPACIO_array_test1['error_obtenido'] = $espacios->ADD();
	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);

	$espacios->DELETE();
	$centros->DELETE();	
	$edificios->DELETE();


// Comprobar Inserción realizada con éxito
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'ADD';
	$ESPACIO_array_test1['error'] = 'Inserción realizada con éxito';
	$ESPACIO_array_test1['error_esperado'] = 'Inserción realizada con éxito';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
	
	$codedificio = 'GA01517';
	$campusedificio = 'AUGA';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'SE015172';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$NUMINVENTARIOESPACIO = '1212';

	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$ESPACIO_array_test1['error_obtenido'] = $espacios->ADD();
	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);

	$espacios->DELETE();
	$centros->DELETE();	
	$edificios->DELETE();


}

function ESPACIO_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$ESPACIO_array_test1 = array();

// Comprobar el login existe
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'DELETE';
	$ESPACIO_array_test1['error'] = 'Borrado realizado con éxito';
	$ESPACIO_array_test1['error_esperado'] = 'Borrado realizado con éxito';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
 
	$codedificio = 'GA01517';
	$campusedificio = 'AUGA';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'SE015172';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
 	$espacios->ADD();

	 $ESPACIO_array_test1['error_obtenido'] = $espacios->DELETE();

 	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);
	
	$centros->DELETE();
	$edificios->DELETE();

	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'DELETE';
	$ESPACIO_array_test1['error'] = 'Error de gestor de base de datos';
	$ESPACIO_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
 
	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'SE015172';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'minombre'; 
	$SUPERFICIEESPACIO = 'miapellido';
	$NUMINVENTARIOESPACIO = '1212';

	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
 	$espacios->ADD();
 	$espacios->codespacio = 'SE015172\' ,\'kdfalkj'; 

	 $ESPACIO_array_test1['error_obtenido'] = $espacios->DELETE();
 	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);

	$espacios->codespacio = 'miusuario';
	$espacios->DELETE();
	$centros->DELETE();	
	$edificios->DELETE();
}

function ESPACIO_EDIT_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$ESPACIO_array_test1 = array();

// Comprobar el login existe
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'EDIT';
	$ESPACIO_array_test1['error'] = 'Actualización realizada con éxito';
	$ESPACIO_array_test1['error_esperado'] = 'Actualización realizada con éxito';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
 
	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'SE015172';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'minombre'; 
	$SUPERFICIEESPACIO = 'miapellido';
	$NUMINVENTARIOESPACIO = '1212';

	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
 	$espacios->ADD();

 	$espacios->SUPERFICIEESPACIO = '225';

	 $ESPACIO_array_test1['error_obtenido'] = $espacios->EDIT();
	 
	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);	

	$espacios->DELETE();
	$centros->DELETE();	
	$edificios->DELETE();

}

function ESPACIO_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$ESPACIO_array_test1 = array();

// Comprobar el login existe
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'SEARCH';
	$ESPACIO_array_test1['error'] = 'Búsqueda realizada correctamente';
	$ESPACIO_array_test1['error_esperado'] = 'object';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
 
	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'SE015172';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'minombre'; 
	$SUPERFICIEESPACIO = 'miapellido';
	$NUMINVENTARIOESPACIO = '1212';

	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
 	$espacios->ADD();

 	$espacios2 = new ESPACIO_Model('','','','minombre','','');

 	$ESPACIO_array_test1['error_obtenido'] = gettype($espacios2->SEARCH());

 	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);
	$espacios->DELETE();
	$centros->DELETE();	
	$edificios->DELETE();

// creo array de almacen de test individual
	$ESPACIO_array_test1 = array();

// Comprobar el login existe
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'SEARCH';
	$ESPACIO_array_test1['error'] = 'Búsqueda no realizada correctamente';
	$ESPACIO_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
 
	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = 'SE015172';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = 'GA01517';
	$CODCENTRO = 'GNC1517';
	$TIPO = 'minombre'; 
	$SUPERFICIEESPACIO = 'miapellido';
	$NUMINVENTARIOESPACIO = '1212';

	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
 	$espacios->ADD();

 	$espacios2 = new ESPACIO_Model('','','','A\' ,\'uga','','','');

 	$ESPACIO_array_test1['error_obtenido'] = $espacios2->SEARCH();

 	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);
	$espacios->DELETE();
	$centros->DELETE();	
	$edificios->DELETE();
}

function ESPACIO_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$ESPACIO_array_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$ESPACIO_array_test1['entidad'] = 'ESPACIO';	
	$ESPACIO_array_test1['metodo'] = 'RellenaDatos';
	$ESPACIO_array_test1['error'] = 'Devuelve los datos';
	$ESPACIO_array_test1['error_esperado'] = 'array';
	$ESPACIO_array_test1['error_obtenido'] = '';
	$ESPACIO_array_test1['resultado'] = '';
	
	$codedificio = '5qphcblk';
	$campusedificio = 'AUGA';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = '5qphcblk';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();

	// Relleno los datos de centro
	$codespacio = 'miusuario';
	$CODEDIFICIO = '5qphcblk';
	$CODCENTRO = 'miusuario';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$NUMINVENTARIOESPACIO = '1212';

	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);

	
// inserto la tupla
	$ESPACIO_array_test1['error_obtenido'] =  $espacios->ADD();

	$ESPACIO_array_test1['error_obtenido'] = gettype($espacios->RellenaDatos());
	if ($ESPACIO_array_test1['error_obtenido'] === $ESPACIO_array_test1['error_esperado'])
	{
		$ESPACIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$ESPACIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $ESPACIO_array_test1);
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();
}
	ESPACIO_ADD_test();
	ESPACIO_DELETE_test();
	ESPACIO_EDIT_test();
	ESPACIO_SEARCH_test();
	ESPACIO_RellenaDatos_test();

?>