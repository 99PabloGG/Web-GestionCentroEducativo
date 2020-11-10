<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad PROF_TITULACION
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad PROF_TITULACION
include_once '../Model/PROF_TITULACION_Model.php';
include_once '../Model/PROFESOR_Model.php';
include_once '../Model/TITULACION_Model.php';
include_once '../Model/CENTRO_Model.php';
include_once '../Model/EDIFICIO_Model.php';

function PROF_TITULACION_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_TITULACION_array_test1 = array();

// Comprobar el login existe
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'ADD';
	$PROF_TITULACION_array_test1['error'] = 'El elemento ya existe';
	$PROF_TITULACION_array_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';
	
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

	// Relleno los datos de centro
	$DNI = '06869169N';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();


	// Relleno los datos de centro
	$DNI = '06869169N';
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';

// creo el modelo
	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
// inserto la tupla
	$prof_titulacion->ADD();

	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion->ADD();
	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);

	$prof_titulacion->DELETE();	
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();


// Comprobar Inserción realizada con éxito
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'ADD';
	$PROF_TITULACION_array_test1['error'] = 'Inserción realizada con éxito';
	$PROF_TITULACION_array_test1['error_esperado'] = 'Inserción realizada con éxito';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';

		
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';

	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion->ADD();
	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);

	$prof_titulacion->DELETE();	
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();


}

function PROF_TITULACION_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_TITULACION_array_test1 = array();

// Comprobar el login existe
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'DELETE';
	$PROF_TITULACION_array_test1['error'] = 'Borrado realizado con éxito';
	$PROF_TITULACION_array_test1['error_esperado'] = 'Borrado realizado con éxito';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';

		
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';


	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
 	$prof_titulacion->ADD();

 	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion->DELETE();
 	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'DELETE';
	$PROF_TITULACION_array_test1['error'] = 'Error de gestor de base de datos';
	$PROF_TITULACION_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';

		
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';


	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
 	$prof_titulacion->ADD();
 	$prof_titulacion->DNI = 'SE015172\' ,\'kdfalkj'; 

 	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion->DELETE();
 	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);
	$prof_titulacion->DNI = 'miusuario';
	$prof_titulacion->DELETE();	
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

}

function PROF_TITULACION_EDIT_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_TITULACION_array_test1 = array();

// Comprobar el login existe
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'EDIT';
	$PROF_TITULACION_array_test1['error'] = 'Actualización realizada con éxito';
	$PROF_TITULACION_array_test1['error_esperado'] = 'Actualización realizada con éxito';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';

		
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';


	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
 	$prof_titulacion->ADD();

 	$prof_titulacion->ANHOACADEMICO = '2019-2020';

 	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion->EDIT();
	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);	
	$prof_titulacion->DELETE();	
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

}

function PROF_TITULACION_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_TITULACION_array_test1 = array();

// Comprobar el login existe
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'SEARCH';
	$PROF_TITULACION_array_test1['error'] = 'Búsqueda realizada correctamente';
	$PROF_TITULACION_array_test1['error_esperado'] = 'object';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';


	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
 	$prof_titulacion->ADD();

 	$prof_titulacion2 = new PROF_TITULACION_Model('','','Auga');

 	$PROF_TITULACION_array_test1['error_obtenido'] = gettype($prof_titulacion2->SEARCH());

 	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);
	$prof_titulacion->DELETE();	
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

// creo array de almacen de test individual
	$PROF_TITULACION_array_test1 = array();

// Comprobar el login existe
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'SEARCH';
	$PROF_TITULACION_array_test1['error'] = 'Búsqueda no realizada correctamente';
	$PROF_TITULACION_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';

		
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';

	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
 	$prof_titulacion->ADD();

 	$prof_titulacion2 = new PROF_TITULACION_Model('','','A\' ,\'uga');

 	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion2->SEARCH();

 	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);
	$prof_titulacion->DELETE();	
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();
}

function PROF_TITULACION_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROF_TITULACION_array_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$PROF_TITULACION_array_test1['entidad'] = 'PROF_TITULACION';	
	$PROF_TITULACION_array_test1['metodo'] = 'RellenaDatos';
	$PROF_TITULACION_array_test1['error'] = 'Devuelve los datos';
	$PROF_TITULACION_array_test1['error_esperado'] = 'array';
	$PROF_TITULACION_array_test1['error_obtenido'] = '';
	$PROF_TITULACION_array_test1['resultado'] = '';
	
	
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
// inserto la tupla
	$centros->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);

	$titulaciones->ADD();

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
	$CODTITULACION = 'mipassword';
	$ANHOACADEMICO = '2018-2019';

	$prof_titulacion = new PROF_TITULACION_Model($DNI,$CODTITULACION,$ANHOACADEMICO);
	$PROF_TITULACION_array_test1['error_obtenido'] = $prof_titulacion->ADD();


	$PROF_TITULACION_array_test1['error_obtenido'] = gettype($prof_titulacion->RellenaDatos());

	if ($PROF_TITULACION_array_test1['error_obtenido'] === $PROF_TITULACION_array_test1['error_esperado'])
	{
		$PROF_TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROF_TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROF_TITULACION_array_test1);
	
	$prof_titulacion->DELETE();
	$profesores->DELETE();
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();
}
	PROF_TITULACION_ADD_test();
	PROF_TITULACION_DELETE_test();
	PROF_TITULACION_EDIT_test();
	PROF_TITULACION_SEARCH_test();
	PROF_TITULACION_RellenaDatos_test();
?>