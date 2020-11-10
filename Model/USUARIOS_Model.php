  <?php

//Clase : USUARIOS_Model
//Función:Se encarga de controlar las acciones de añadir, eliminar, buscar, editar, mostrar todos y mostrar en detalle de los usuarios en la base de datos
//Creado el : 5-10-2019
//Creado por: 70ky5e
//-------------------------------------------------------

class USUARIOS_Model {
		//Definimos las variables
	var $login; //variable que guarda el login
	var $password;//variable que guarda la password
	var $DNI;//variable que guarda el DNI del usuario
	var $nombre;//variable que guarda el nombre del usuario
	var $apellidos;//variable que guarda los apellidos del usuario
	var $telefono;//variable que guarda el teléfono del usuario
	var $email;//variable que guarda el email del usuario
	var $FechaNacimiento;//variable que guarda la fecha de nacimiento
	var $fotopersonal;//variable que guarda la foto
	var $sexo;//variable que guarda el sexo 
	var $mysqli;//variable que guarda los valores de la base de datos


        function __construct($login,$password,$DNI,$nombre,$apellidos,$telefono,$email,$FechaNacimiento,$fotopersonal,$sexo){

            $this->login = $login;
            $this->password = $password;
            $this->DNI = $DNI;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->telefono = $telefono;
            $this->email = $email;//Comprobamos si es un atributo de tipo fecha o no 
                //realiza la comprobacion del dato
            if($FechaNacimiento == ''){
                           $this->FechaNacimiento = $FechaNacimiento;
                }//en caso contrario
                else{

                       $this->FechaNacimiento = date_format(date_create($FechaNacimiento), 'Y-m-d');
                            
                        
                }
            $this->fotopersonal = $fotopersonal;
            $this->sexo = $sexo;
			$this->erroresdatos = array(); 

	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB();
}

// function Comprobar_atributos
// si todas las funciones de comprobacion de atributos individuales son true devuelve true
// si alguna es false, devuelve el array de errores de datos
function Comprobar_atributos()
{
	//realiza la comprobacion del dato
	if (($this->Comprobar_login()) &
		($this->Comprobar_password()) &
		($this->Comprobar_nombre()) &
		($this->Comprobar_apellidos()) &
		($this->Comprobar_DNI()) &
		($this->Comprobar_telefono()) &
		($this->Comprobar_email()) &
		($this->Comprobar_fecha()) &
		($this->Comprobar_sexo()) 
		)
	{
		return true;
	}
	//en caso contrario
	else
		{
			return $this->erroresdatos;
		}
}

// function Comprobar_login()
// Comprueba el formato del login 
//	alfanumerico
//	mayor o igual a 5
// 	menor o igual a 15
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_login()
{
	//realiza la comprobacion del dato
	if (!preg_match("/^[A-Za-z]+$/",$this->login)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "login");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00090");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Solo se permiten alfabéticos");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);//añade el mensaje al array de errores
		return false;//ddevuelve false
	}//si cumple los requisitos
	//en caso contrario
	else
	{
		return true;//devuelve true
	}
}
// function Comprobar_password()
// Comprueba el formato del password
//	alfanumerico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_password()
{
	//realiza la comprobacion del dato
	if (!preg_match("/^[A-Za-z]+$/",$this->password)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "password");
		//guarda un mensaje de error
		array_push($error, "00090");
		//guarda un mensaje de error
		array_push($error, "Solo se permiten alfabéticos");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);

		return false;
	}
	//en caso contrario
	else
	{
		return true;
	}
}

// function Comprobar_nombre()
// Comprueba el formato del nombre
//	alfabetico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_nombre()
{
	$correcto = true;//se inicializa la variable a true
	//si la longitud del nombre es menor que tres

	//realiza la comprobacion del dato
	if (strlen($this->nombre)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "nombre");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00003");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion del dato
	if (strlen($this->nombre)>30)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "nombre");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00002");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);;//guarda un mensaje de error
		$correcto = false;
	}
	//realiza la comprobacion del dato
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->nombre)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "nombre");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00090");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Solo se permiten alfabéticos");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);//guarda un mensaje de error
		$correcto = false;
	}

	
	return $correcto;
}
// function Comprobar_DNI()
// Comprueba el formato del dni
//	alfanumerico
//expre-reg= ********X
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_DNI()
{
	$correcto = true;

	//realiza la comprobacion del dato
	if (strlen($this->DNI)!=9)
	{		
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DNI");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00011");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Dni no válido");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	//realiza la comprobacion del dato
	if ((!preg_match("/^\d{8}[a-zA-Z]$/",$this->DNI)) || (!$this->validar_letra($this->DNI))){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "DNI");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00011");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Formato dni erróneo");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}


	return $correcto;
}
// function validar_letra()
// Comprueba el formato de la letra
//	alfbetico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function validar_letra($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	//realiza la comprobacion del dato
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		return true;
	}//en caso contrario
	else{
		return false;
	}
}
// function Comprobar_apellidos()
// Comprueba el formato del apellidos
//	alfbetico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_apellidos(){
	$correcto = true;

	//realiza la comprobacion del dato
	if(strlen($this->apellidos)<3){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "apellidos");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00003");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);//guarda un mensaje de error
		$correcto = false;
	}

	//realiza la comprobacion del dato
	if(strlen($this->apellidos)>50){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "apellidos");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00002");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);;
		$correcto = false;
	}

	//realiza la comprobacion del dato
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->apellidos)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "apellidos");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00090");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Solo se permiten alfabéticos");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	return $correcto;
}
// function Comprobar_telefono()
// Comprueba el formato del telefono
//	numerico
// expr-reg: XXXXXXXXX
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_telefono(){
	$correcto = true;
	//realiza la comprobacion del dato
	if(strlen($this->telefono)<1){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "telefono");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00004");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo numérico demasiado corto");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	//realiza la comprobacion del dato
	if(strlen($this->telefono)>11){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "telefono");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00002");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion del dato
	if (!preg_match("/^(34)?[6|7|9][0-9]{8}$/",$this->telefono)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "telefono");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00006");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Teléfono no válido");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	return $correcto;
}
// function Comprobar_email()
// Comprueba el formato del EMAIL
//	alfanumerico
// expr-reg: email@email.dom
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_email(){
	$correcto = true;

	//realiza la comprobacion del dato
	if(strlen($this->email)<3){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "email");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00003");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	//realiza la comprobacion del dato
	if(strlen($this->email)>60){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "email");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00002");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion del dato
	if(!preg_match("/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i",$this->email)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "email");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "00120");//guarda un mensaje de error
		//guarda un mensaje de error
		array_push($error, "Formato email erróneo");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}				 
	return $correcto;
}
// function Comprobar_fecha()
// Comprueba el formato de la fecha
//	alfanumerico
// expr-reg: dd/mm/aaaa
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_fecha(){
	$correcto = true;
	//realiza la comprobacion del dato
	if(strlen($this->FechaNacimiento)<3){
		$error = array();
		
		array_push($error, "FechaNacimiento");//guarda un mensaje de error
		array_push($error, "00003");//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");//guarda un mensaje de error

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	//realiza la comprobacion del dato
	if(strlen($this->FechaNacimiento)>10){
		$error = array();
		array_push($error, "FechaNacimiento");//guarda un mensaje de error
		array_push($error, "00002");//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");//guarda un mensaje de error
		
		array_push($this->erroresdatos, $error);//guarda un mensaje de error
		$correcto = false;
	}
	/*//realiza la comprobacion del dato
	if(!preg_match("/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$/",$this->FechaNacimiento)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "FechaNacimiento");
		//guarda un mensaje de error
		array_push($error, "00020");
		//guarda un mensaje de error
		array_push($error, "Formato fecha erróneo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}	*/
	return $correcto;
}
// function Comprobar_sexo()
// Comprueba el formato del sexo
//	hombre / mujer
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_sexo(){
	$correcto = true;

	//realiza la comprobacion del dato
	if (($this->sexo != 'hombre') && ($this->sexo != 'mujer')){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "sexo");
		//guarda un mensaje de error
		array_push($error, "00100");
		//guarda un mensaje de error
		array_push($error, 'Solo se permiten los valores "hombre","mujer"');

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

	//realiza la comprobacion del dato
	if ($this->Comprobar_atributos() === true){
		$sql = "SELECT * from USUARIOS WHERE login = '".$this->login."'";
		//realiza la comprobacion del dato
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}
		//realiza la comprobacion del dato
		if ($result->num_rows == 1){  // existe el usuario
				return 'Inserción fallida: el usuario ya existe';
			}
			$sql = "SELECT * from USUARIOS WHERE email = '".$this->email."'";

			//realiza la comprobacion del dato
			if (!$result = $this->mysqli->query($sql))
			{
				return 'Error de gestor de base de datos';
			}
			//realiza la comprobacion del dato
			if ($result->num_rows == 1){  // existe el usuario
					return 'Inserción fallida: el usuario ya existe';
				}
				$sql = "INSERT INTO USUARIOS (
								login,
								password,
								DNI,
								nombre,
								apellidos,
								telefono,
								email,
								FechaNacimiento,
								fotopersonal,
								sexo) 
						VALUES (
								'$this->login',
								'$this->password',
								'$this->DNI',
								'$this->nombre',
								'$this->apellidos',
								'$this->telefono',
								'$this->email',
								'$this->FechaNacimiento',
								'$this->fotopersonal',
								'$this->sexo')";

				//realiza la comprobacion del dato
				if (!$this->mysqli->query($sql)) {
					return 'Error de gestor de base de datos';
				}
				//en caso contrario
				else{
					return 'Inserción realizada con éxito'; //operacion de insertado correcta
				}		
			}//en caso contrario
			else{
				return  $this->erroresdatos;
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

	$sql = "SELECT 
						login,
						DNI,
						nombre,
                        apellidos,
                        telefono,
                        email,
                        FechaNacimiento,
                        fotopersonal,
                        sexo
			FROM USUARIOS
			WHERE (
						 (login LIKE '%$this->login%')&&
                         (DNI LIKE '%$this->DNI%')&&
                         (nombre LIKE '%$this->nombre%')&&
                         (apellidos LIKE '%$this->apellidos%')&&
                         (telefono LIKE '%$this->telefono%')&&
                         (email LIKE '%$this->email%')&&
                         (FechaNacimiento LIKE '%$this->FechaNacimiento%')&&
                         (fotopersonal LIKE '%$this->fotopersonal%')&&
                         (sexo LIKE '%$this->sexo%')
			)
	";
	//realiza la comprobacion del dato
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
	    
    $sql = "SELECT * FROM USUARIOS WHERE login= '$this->login';";
    //realiza la comprobacion del dato
    if($result = $this->mysqli->query($sql)){
	    //realiza la comprobacion del dato
	    if ($result->num_rows == 1)
	    {
	   			$sql = "	DELETE FROM 
	   				USUARIOS
	   			WHERE(
	   				login = '$this->login'
	   			)
	   			";
			//realiza la comprobacion del dato
			if ($this->mysqli->query($sql))
			{
				$resultado = 'Borrado realizado con éxito';
			}
		}//en caso contrario
		else{
			$resultado = 'Usuario no existe';
		}
	}
	//en caso contrario
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
			FROM USUARIOS
			WHERE (
				(login = '$this->login') 
			)";

	//realiza la comprobacion del dato
	if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';
	}//en caso contrario
	else
	{
		$tupla = $resultado->fetch_array();
	}
	return $tupla;
}

// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//realiza la comprobacion del dato
	if ($this->Comprobar_atributos() == TRUE){
	$sql = "UPDATE USUARIOS SET login = '$this->login',password = '$this->password',DNI = '$this->DNI',nombre = '$this->nombre',apellidos = '$this->apellidos',telefono = '$this->telefono',email = '$this->email',FechaNacimiento = '$this->FechaNacimiento',fotopersonal = '$this->fotopersonal',sexo = '$this->sexo' WHERE login= '$this->login'";
	//realiza la comprobacion del dato
	if ($this->mysqli->query($sql))
	{
		$resultado = 'Actualización realizada con éxito';
	}
	//en caso contrario
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;
	}//en caso contrario
	else{
		return $this->erroresdatos;
	}
}

// funcion login: realiza la comprobación de si existe el usuario en la bd y despues si la pass
// es correcta para ese usuario. Si es asi devuelve true, en cualquier otro caso devuelve el 
// error correspondiente
function login(){

	$sql = "SELECT *
			FROM USUARIOS
			WHERE (
				(login = '$this->login') 
			)";

	$resultado = $this->mysqli->query($sql);
	//realiza la comprobacion del dato
	if ($resultado->num_rows == 0){
		return 'El login no existe';
	}
	//en caso contrario
	else{
		$tupla = $resultado->fetch_array();
		//realiza la comprobacion del dato
		if ($tupla['password'] == $this->password){
			return true;
		}
		//en caso contrario
		else{
			return 'La password para este usuario no es correcta';
		}
	}
}//fin metodo login

// funcion register: ¡realiza el registro del usuario
function Register(){

		$sql = "SELECT * from USUARIOS WHERE login = '".$this->login."'";

		$result = $this->mysqli->query($sql);
		//realiza la comprobacion del dato
		if ($result->num_rows == 1){  // existe el usuario
				return 'El usuario ya existe';
			}
		//en caso contrario
			else{
	    		return true; //TEST : El usuario no existe

	}
}
// funcion registrar: introduce el usuario en la base de datos
function registrar(){

	//realiza la comprobacion del dato
	if ($this->Comprobar_atributos() === true){		
		$sql = "INSERT INTO USUARIOS (
                      login,
                        password,
                        DNI,
                        nombre,
                        apellidos,
                        telefono,
                        email,
                        FechaNacimiento,
                        fotopersonal,
                        sexo) 
				VALUES (
                        '$this->login',
                        '$this->password',
                        '$this->DNI',
                        '$this->nombre',
                        '$this->apellidos',
                        '$this->telefono',
                        '$this->email',
                        '$this->FechaNacimiento',
                        '$this->fotopersonal',
                        '$this->sexo'
					)";
		//realiza la comprobacion del dato
		if (!$this->mysqli->query($sql)) {
			return 'Error en la inserción';
		}
		//en caso contrario
		else{
			return true; //operacion de insertado correcta
		}
	}//en caso contrario
	else {
		return $this->erroresdatos;
	}		
	}

}//fin de clase

?>