function validar(){

  var correo,clave,rol,documento;
  var expresion = /\w+@\w+.+[a-z]/;

  correo = document.getElementById('correo').value;
  clave = document.getElementById('clave').value;
  rol = document.getElementById('rol').value;
  documento = document.getElementById('documento').value;

  if (!expresion.test(correo) || correo==="") {

    alert('El correo no cumple con los requisitos');
    return false;

  }else if (clave==="") {

    alert('El campo contraseña es obligatorio');
    return false;

  }else if (rol=="0" || rol==="") {

    alert('Se debe seleccionar un rol');
    return false;
  }else if (isNaN(documento) || documento===""){

    alert('Solo se permite ingresar numeros');
    return false;

  }
}
