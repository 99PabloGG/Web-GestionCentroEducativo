<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad PROF_ESPACIO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad PROF_ESPACIO
include_once '../Model/PROF_ESPACIO_Model.php';
include_once '../Model/ESPACIO_Model.php';
include_once '../Model/PROFESOR_Model.php';

function PROF_ESPACIO_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_ESPACIOarray_test1 = array();

// Comprobar el login existe
	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'ADD';
	$PROF_ESPACIOarray_test1['error'] = 'El elemento ya existe';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';
	
	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = '06869169N';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();

		 
	// Relleno los datos de centro
	$DNI = '06869169N';
	$CODESPACIO = 'Auga';

// creo el modelo
	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
// inserto la tupla
	$prof_espacios->ADD();

	$PROF_ESPACIOarray_test1['error_obtenido'] = $prof_espacios->ADD();
	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);

	$prof_espacios->DELETE();
	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();	


// Comprobar Inserción realizada con éxito
	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'ADD';
	$PROF_ESPACIOarray_test1['error'] = 'Inserción realizada con éxito';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'Inserción realizada con éxito';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';

	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 
	
// creo el modelo
$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = '06869169N';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();
	
	$DNI = '06869169N';
	$CODESPACIO = 'Auga';

	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
	$PROF_ESPACIOarray_test1['error_obtenido'] = $prof_espacios->ADD();
	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);

	$prof_espacios->DELETE();
	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();	


}

function PROF_ESPACIO_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_ESPACIOarray_test1 = array();

// Comprobar el login existe
	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'DELETE';
	$PROF_ESPACIOarray_test1['error'] = 'Borrado realizado con éxito';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'Borrado realizado con éxito';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';
 

	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 
// creo el modelo
$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = '06869169N';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();

 	$DNI = '06869169N';
	$CODESPACIO = 'Auga';

	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
 	$prof_espacios->ADD();

 	$PROF_ESPACIOarray_test1['error_obtenido'] = $prof_espacios->DELETE();
 	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);

	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();	

	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'DELETE';
	$PROF_ESPACIOarray_test1['error'] = 'Error de gestor de base de datos';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'Error de gestor de base de datos';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';

	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 
// creo el modelo
$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'SE015172'; 
	$SUPERFICIEESPACIO = 'Fran';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = 'miusuario';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();
 
 	$DNI = 'miusuario';
	$CODESPACIO = 'Auga';


	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
 	$prof_espacios->ADD();
 	$prof_espacios->CODESPACIO = 'SE015172\' ,\'kdfalkj'; 

 	$PROF_ESPACIOarray_test1['error_obtenido'] = $prof_espacios->DELETE();
 	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);
	$prof_espacios->CODESPACIO = 'Auga';
	$prof_espacios->DELETE();
	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();	
}


function PROF_ESPACIO_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_ESPACIOarray_test1 = array();

// Comprobar el login existe
	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'SEARCH';
	$PROF_ESPACIOarray_test1['error'] = 'Búsqueda realizada correctamente';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'object';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';

	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 
	
// creo el modelo
$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'SE015172'; 
	$SUPERFICIEESPACIO = 'Fran';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = 'miusuario';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();
 
 	$DNI = 'miusuario';
	$CODESPACIO = 'Auga';


	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
 	$prof_espacios->ADD();

 	$prof_espacios2 = new PROF_ESPACIO_Model('','Auga');

 	$PROF_ESPACIOarray_test1['error_obtenido'] = gettype($prof_espacios2->SEARCH());

 	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);
	$prof_espacios->DELETE();
	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();	

// creo array de almacen de test individual
	$PROF_ESPACIOarray_test1 = array();

// Comprobar el login existe
	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'SEARCH';
	$PROF_ESPACIOarray_test1['error'] = 'Búsqueda no realizada correctamente';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'Error de gestor de base de datos';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';

	
	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 
	
// creo el modelo
$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'SE015172'; 
	$SUPERFICIEESPACIO = 'Fran';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = 'miusuario';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();
 
 	$DNI = 'miusuario';
	$CODESPACIO = 'Auga';


	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
 	$prof_espacios->ADD();

 	$prof_espacios2 = new PROF_ESPACIO_Model('','A\' ,\'uga');

 	$PROF_ESPACIOarray_test1['error_obtenido'] = $prof_espacios2->SEARCH();

 	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);
	$prof_espacios->DELETE();
	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();	
}
function PROF_ESPACIO_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_ESPACIOarray_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$PROF_ESPACIOarray_test1['entidad'] = 'PROF_ESPACIO';	
	$PROF_ESPACIOarray_test1['metodo'] = 'RellenaDatos';
	$PROF_ESPACIOarray_test1['error'] = 'Devuelve los datos';
	$PROF_ESPACIOarray_test1['error_esperado'] = 'array';
	$PROF_ESPACIOarray_test1['error_obtenido'] = '';
	$PROF_ESPACIOarray_test1['resultado'] = '';
	
	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();


	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';

	// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	// inserto la tupla
	$centros->ADD();

	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = 'miusuario ';
	$TIPO = 'PAS'; 
	$SUPERFICIEESPACIO = '131';
	$codespacio = 'Auga';
	$NUMINVENTARIOESPACIO = '1212';


	$espacios = new ESPACIO_Model($codespacio, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO);
	$espacios->ADD();
	
	// Relleno los datos de centro
	$DNI = '06869169N';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();

		 
	// Relleno los datos de centro
	$DNI = '06869169N';
	$CODESPACIO = 'Auga';

// creo el modelo
	$prof_espacios = new PROF_ESPACIO_Model($DNI,$CODESPACIO);
// inserto la tupla
	$prof_espacios->ADD();

	$PROF_ESPACIOarray_test1['error_obtenido'] = $prof_espacios->ADD();


	$PROF_ESPACIOarray_test1['error_obtenido'] = gettype($prof_espacios->RellenaDatos());

	if ($PROF_ESPACIOarray_test1['error_obtenido'] === $PROF_ESPACIOarray_test1['error_esperado'])
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_ESPACIOarray_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_ESPACIOarray_test1);
	
	$prof_espacios->DELETE();
	$profesores->DELETE();
	$espacios->DELETE();
	$centros->DELETE();
	$edificios->DELETE();
}
	PROF_ESPACIO_ADD_test();
	PROF_ESPACIO_DELETE_test();
	PROF_ESPACIO_SEARCH_test();
	PROF_ESPACIO_RellenaDatos_test();

?>