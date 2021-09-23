function validar(){
  var num_documento, Primer_Nombre, Segundo_Nombre, Primer_Apellido, Segundo_Apellido, fecha_nacimiento, grupo_sanguineo, tipo_documento, tipo_persona, genero, expresion;
  num_documento = document.getElementById("num_documento").value;
  Primer_Nombre = document.getElementById("Primer_Nombre").value;
  Segundo_Nombre = document.getElementById("Segundo_Nombre").value;
  Primer_Apellido = document.getElementById("Primer_Apellido").value;
  Segundo_Apellido = document.getElementById("Segundo_Apellido").value;
  fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
  grupo_sanguineo = document.getElementById("grupo_sanguineo").value;
  tipo_documento = document.getElementById("tipo_documento").value;
  tipo_persona = document.getElementById("tipo_persona").value;
  genero = document.getElementById("genero").value;

  //Expresiones regulares
  expresion = /\w+@\w+\.+[a-z]/; /*Esto es para que el correo quede bien escrito*/
  expresion2 = /^[A-Z]+$/i; 

  if(num_documento === "" || Primer_Nombre === "" || Primer_Apellido === "" || fecha_nacimiento === "" || grupo_sanguineo === "0" || tipo_documento === "0" || genero === "0"){
      alert("Algunos campos son obligatorios");
      return false;
  }
  //Validar primer nombre
  else if(Primer_Nombre.length>15){
    alert("El primer nombre es muy largo");
    return false;
  }

  else if(!expresion2.test(Primer_Nombre)){
    alert("El primer nombre no puede contener números ni espacios en blanco");
    return false;
  }

  //Validar segundo nombre
  else if(Segundo_Nombre.length>15){
    alert("El segundo nombre es muy largo");
    return false;
  }
  
  
  //Validar primer apellido
  else if(Primer_Apellido.length>15){
    alert("El primer apellido es muy largo");
    return false;
  }


  else if(!expresion2.test(Primer_Apellido)){
    alert("El primer apellido no puede contener números ni espacios en blanco");
    return false;
  }

  //Validar Segundo apellido
  else if(Segundo_Apellido.length>15){
    alert("El segundo apellido es muy largo");
    return false;
  }

  //Validar num_documento
  else if(num_documento.length>15){
    alert("El numero de documento es muy largo");
    return false;
  }
  else if(isNaN(num_documento)){
    alert("Solo se permiten valores numericos en Numero de documento");
    return false;
  }
  else if(num_documento.indexOf(" ") !== -1) {
    alert("El numero de documento no puede contener espacios en blanco");
    return false;
  }
  //Se realiza estos IF por separado debido que el campo no es obligatorio de enviar.

  if(Segundo_Nombre===""){

      return true;
  
    }else if(!expresion2.test(Segundo_Nombre)){
      alert("El segundo nombre no puede contener números ni espacios en blanco");
      return false;
    }

    if(Segundo_Apellido===""){

      return true;
  
    }else if(!expresion2.test(Segundo_Apellido)){
      alert("El segundo apellido no puede contener números ni espacios en blanco");
      return false;
    }
  
  

};
