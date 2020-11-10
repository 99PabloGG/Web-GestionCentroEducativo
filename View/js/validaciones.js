    //Hecho por: 70ky5e
    //1-11-2019

    //cierra la ventan modal de muestra de un mensaje de error
    //
    function cerrarModal(){
      document.getElementById("modal").style.display = "none"; 
    }
    //Abre una ventan modal para mostrar un mensaje de error
    //    
    function abrirModal(campo, texto){
      document.getElementById("modal").style.display = "block";   
      document.getElementById("mensajeError").innerHTML = texto;
      document.getElementById("mensajeError").style.margin = "30px 0 0 160px";
      document.getElementById("cerrar").focus();
    } 


    //Valida un campo del formulario para ver si viene null o sin contenido
    //
    function comprobarVacio(campo){
      
      var correcto = false;
      valor = document.getElementById(campo).value;
      nombre = document.getElementById(campo).name;
      longitud = document.getElementById(campo).value.length;
      
      //comprobacion de que el campo se ajusta a la expresion requerida
      if ((valor == null) || (longitud == 0)){
        abrirModal(campo, nombre + aLangKeys[sessionStorage.getItem("lang")]["vacio"]);
        correcto = false;
      } 
      else{
        correcto = true;
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){
        document.getElementById(campo).style.borderColor = 'green';
        return true;
      }
      else{
        document.getElementById(campo).style.borderColor = "red";
        return false;
      }
      
    }


    //Valida la longitud de un texto pasandole el objeto y el tamaño en caracteres letras y numeros que puede tener.
    //
    // 
    function comprobarAlfabetico(campo,size) {

      var correcto = true;
		  
      //comprobacion de que el campo se ajusta a la expresion requerida
      if (document.getElementById(campo).value.length>size) {
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["tamanho"]) + "( " + document.getElementById(campo).value.length+" caracteres" + " )";
        correcto = false;
  		}
		  
     	var patron = /^[a-zA-Z0-9]+$/; // establecemos un patron para cualquier numero de digitos
  		//comprobacion de que el campo se ajusta a la expresion requerida
      if (!patron.test(document.getElementById(campo).value)){ // si no cumple el patron pq hay elementos que no son digitos
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["letrasYDigitos"]);
        correcto = false;
      }
      
      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){
      	document.getElementById(campo).style.borderColor = "green"; // cambiamos el color del borde del elemento html a verde
        return true;
      }
      else{
        document.getElementById(campo).style.borderColor = "red";
        return false;
      }

    }

    //Valida la longitud de un texto pasandole el objeto y el tamaño en caracteres solo letras que puede tener.
    //
    // 
    function comprobarTexto(campo,size) {
    
      var correcto = true;

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (document.getElementById(campo).value.length>size) {
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["tamanho"]);
        correcto = false;
      }
      var patron = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
      //comprobacion de que el campo se ajusta a la expresion requerida
      if (!patron.test(document.getElementById(campo).value)){ // si no cumple el patron pq hay elementos que no son digitos
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["soloLetras"]);
        correcto = false;
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){      
        document.getElementById(campo).style.borderColor = 'green'; // cambiamos el color del borde del elemento html a verde
        return true;
      }
      else{
        document.getElementById(campo).style.borderColor = 'red'; // cambiamos el color del borde del elemento html a rojo
        return false;
      }
      
    }

    //Comprueba que sea un email formado correctamente
    //
    // 
    function comprobarEmail(campo,size) {
    
      var correcto = true;

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (document.getElementById(campo).value.length>size) {
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["tamanho"] + " (email@email.dom)");
        correcto = false;
      }
      
      var patron = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/; // establecemos un patron para un email
      //comprobacion de que el campo se ajusta a la expresion requerida
      if (!patron.test(document.getElementById(campo).value)){ // si no cumple el patron pq hay elementos que no son digitos
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["formato"] + " (email@email.dom)");
        correcto = false;
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){      
        document.getElementById(campo).style.borderColor = 'green'; // cambiamos el color del borde del elemento html a verde
        return true;
      }
      else{
        document.getElementById(campo).style.borderColor = 'red';
        return false;
      }
      
    }

    //Valida la longitud de un int pasandole el objeto y el tamaño en digitos que puede tener.
    //
    //
    function comprobarEntero(campo,valormenor, valormayor) {
      
      var correcto = true;

      var patron = /^\d+$/; // establecemos un patron para cualquier numero de digitos
  		//comprobacion de que el campo se ajusta a la expresion requerida
      if (!patron.test(document.getElementById(campo).value)){ // si no cumple el patron pq hay elementos que no son digitos
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["soloDigitos"]);
        correcto = false;
  		}

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (document.getElementById(campo).value.length>valormayor || document.getElementById(campo).value.length<valormenor) {
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["tamanho"]);
        correcto = false;
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){
        document.getElementById(campo).style.borderColor = 'green'; // ponemos el bordercolor a verde
    	  return true; // devolvemos true
      }
      else{
        document.getElementById(campo).style.borderColor = 'red'; // ponemos el bordercolor a rojo
        return false;
      }
    }
    
function comprobarExp(idelemento) {
  
    var correcto = true;
    var patron = /[0-9]{4}\-[0-9]{4}/; // establecemos un patron

    if (!patron.test(document.getElementById(idelemento).value)){ // si no cumple el patron pq hay elementos que no
      abrirModal(idelemento, document.getElementById(idelemento).name + aLangKeys[sessionStorage.getItem("lang")]["formato"] + " (xxxx-xxxx)");
      correcto = false;
    }

    if (correcto){      
      document.getElementById(idelemento).style.borderColor = 'green'; // cambiamos el color del borde del elemento html a verde
      return true;
    }
    else{
      document.getElementById(idelemento).style.borderColor = 'red';
      return false;
    }
    
  }


    //Valida la longitud de un int pasandole el objeto y el tamaño en digitos que puede tener.
    //
    //
    function comprobarTelf(campo) {
      
      var correcto = true;

      var patron = /^\d+$/; // establecemos un patron para cualquier numero de digitos
      //comprobacion de que el campo se ajusta a la expresion requerida
      if (!patron.test(document.getElementById(campo).value)){ // si no cumple el patron pq hay elementos que no son digitos
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["soloDigitos"]);
        correcto = false;
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (!(document.getElementById(campo).value.length==11 || document.getElementById(campo).value.length==9)) {
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["9-11"]);
        correcto = false;
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){
        document.getElementById(campo).style.borderColor = 'green'; // ponemos el bordercolor a verde
        return true; // devolvemos true
      }
      else{
        document.getElementById(campo).style.borderColor = 'red'; // ponemos el bordercolor a rojo
        return false;
      }
    }
    

    //Comprueba el formato y lo da valido si es dni o nie
    //
    
    function comprobarDni(campo) {
      
      var correcto = true;

      var validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';
      var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
      var nieRexp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
      var str = document.getElementById(campo).value.toString().toUpperCase();

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (!nifRexp.test(str) && !nieRexp.test(str)){
        abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["formato"] + " (********A)");
        correcto = false;        
      } 
      else{
        var nie = str
            .replace(/^[X]/, '0')
            .replace(/^[Y]/, '1')
            .replace(/^[Z]/, '2');

        var letter = str.substr(-1);
        var charIndex = parseInt(nie.substr(0, 8)) % 23;

        //comprobacion de que el campo se ajusta a la expresion requerida
        if (validChars.charAt(charIndex) === letter){
          correcto = true;
        }
        else{
          abrirModal(campo, document.getElementById(campo).name+ aLangKeys[sessionStorage.getItem("lang")]["formato"] + " (********A)");
          correcto =  false;
        }
      }

      //comprobacion de que el campo se ajusta a la expresion requerida
      if (correcto){
        document.getElementById(campo).style.borderColor = 'green'; // ponemos el bordercolor a verde
        return true; // devolvemos true
      }
      else{
        document.getElementById(campo).style.borderColor = 'red';
        return false;
      }

      
    }
    //Valida todos los campos del formulario antes de permitir hacer el submit

    function comprobar_registro(){
      
      //comprobacion de que el campo se ajusta a la expresion requerida
      if(
        comprobarVacio('login') && comprobarTexto('login',9) &&
        comprobarVacio('password') && comprobarTexto('password',16) &&
        comprobarVacio('nombre')  && comprobarTexto('nombre',30) &&
        comprobarVacio('apellidos')  && comprobarTexto('apellidos',50) &&
        comprobarVacio('DNI')  && comprobarDni('DNI') &&
        comprobarVacio('email') && comprobarEmail('email') &&
        comprobarVacio('fotopersonal')  && 
        comprobarVacio('nombre')  && comprobarTexto('nombre',30) &&  
        comprobarVacio('sexo') && 
        comprobarVacio('nombre')  && comprobarTexto('nombre',30)
      ){
        // si todas estan correctas devuelve un true
        return true;
      }
      else{
        // si alguna falla devuelve un false
        return false;
      }
    }
    //Valida todos los campos del formulario antes de permitir hacer el submit

    function comprobar_login(){
      
      //comprobacion de que el campo se ajusta a la expresion requerida
      if(
        comprobarVacio('login') && comprobarTexto('login',9) &&
        comprobarVacio('password') && comprobarTexto('password',15)
      ){
        // si todas estan correctas devuelve un true
        return true;
      }
      else{
        // si alguna falla devuelve un false
        return false;
      }
    }    
    //Valida todos los campos del formulario antes de permitir hacer el submit
    function comprobar_titulacion(){
      
      //comprobacion de que el campo se ajusta a la expresion requerida
      if(
        comprobarVacio('CODTITULACION') && comprobarAlfabetico('CODTITULACION', ' 10') &&
        comprobarVacio('NOMBRETITULACION') && comprobarTexto('NOMBRETITULACION', ' 50') && 
        comprobarVacio('RESPONSABLETITULACION') && comprobarTexto('RESPONSABLETITULACION', ' 60')
      ){
        // si todas estan correctas devuelve un true
        return true;
      }
      else{
        // si alguna falla devuelve un false
        return false;
      }
    }
    //Valida todos los campos del formulario antes de permitir hacer el submit
    function comprobar_profesor(){
    
    //comprobacion de que el campo se ajusta a la expresion requerida
    if(
      comprobarVacio('DNI')  && comprobarDni('DNI') &&
      comprobarVacio('NOMBREPROFESOR')  && comprobarTexto('NOMBREPROFESOR', ' 15') && 
      comprobarVacio('APELLIDOSPROFESOR')  && comprobarTexto('APELLIDOSPROFESOR', ' 30') &&
      comprobarVacio('AREAPROFESOR')  && comprobarTexto('AREAPROFESOR', ' 60') && 
      comprobarVacio('DEPARTAMENTOPROFESOR')  && comprobarAlfabetico('DEPARTAMENTOPROFESOR', ' 60')
    ){
      // si todas estan correctas devuelve un true
      return true;
    }
    else{
      // si alguna falla devuelve un false
      return false;
    }
  }    

    //Valida todos los campos del formulario antes de permitir hacer el submit
  function comprobar_espacio(){
    
    //comprobacion de que el campo se ajusta a la expresion requerida
    if(
      comprobarVacio('CODESPACIO') && comprobarAlfabetico('CODESPACIO', ' 10') &&
      comprobarVacio('SUPERFICIEESPACIO')  && comprobarEntero('SUPERFICIEESPACIO', '1', ' 9999')  && 
      comprobarVacio('NUMINVENTARIOESPACIO') && comprobarEntero('NUMINVENTARIOESPACIO', '1', ' 99999999')
    ){
      // si todas estan correctas devuelve un true
      return true;
    }
    else{
      // si alguna falla devuelve un false
      return false;
    }
    }
    

    //Valida todos los campos del formulario antes de permitir hacer el submit
    function comprobar_edificio(){
    
    //comprobacion de que el campo se ajusta a la expresion requerida
    if(
      comprobarVacio('CODEDIFICIO') && comprobarAlfabetico('CODEDIFICIO', ' 10') &&
      comprobarVacio('NOMBREEDIFICIO') && comprobarTexto('NOMBREEDIFICIO', ' 50')   && 
      comprobarVacio('DIRECCIONEDIFICIO') && comprobarAlfabetico('DIRECCIONEDIFICIO', ' 50') && 
      comprobarVacio('CAMPUSEDIFICIO') && comprobarTexto('CAMPUSEDIFICIO', ' 10')
    ){
      // si todas estan correctas devuelve un true
      return true;
    }
    else{
      // si alguna falla devuelve un false
      return false;
    }
    }    

    function comprobar_proftitulacion(){
    
    //comprobacion de que el campo se ajusta a la expresion requerida
    if(
      comprobarVacio('ANHOACADEMICO') && comprobarExp('ANHOACADEMICO')
    ){
      // si todas estan correctas devuelve un true
      return true;
    }
    else{
      // si alguna falla devuelve un false
      return false;
    }
    }

    //Valida todos los campos del formulario antes de permitir hacer el submit
    function comprobar_centro(){
    
    //comprobacion de que el campo se ajusta a la expresion requerida
    if(
      comprobarVacio('CODCENTRO') && comprobarAlfabetico('CODCENTRO', '10') &&
      comprobarVacio('NOMBRECENTRO') && comprobarTexto('NOMBRECENTRO', ' 50') && 
      comprobarVacio('DIRECCIONCENTRO') && comprobarAlfabetico('DIRECCIONCENTRO', ' 150') && 
      comprobarVacio('RESPONSABLECENTRO') && comprobarTexto('RESPONSABLECENTRO', ' 60') 
    ){
      // si todas estan correctas devuelve un true
      return true;
    }
    else{
      // si alguna falla devuelve un false
      return false;
    }
  }
