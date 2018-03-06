//funciones comprobar insertar


function validar() {

var nombre = document.getElementById("nombre").value;
var apellidos = document.getElementById("apellidos").value;
var edad = document.getElementById("edad").value;
var curso = document.getElementById("curso").value;
var puntuacion = document.getElementById("puntuacion").value;

if(nombre == ''){
  alert('Nombre esta vacio');
  return false;
}

else if(apellidos == ''){
  alert('Apellidos esta vacio');
  return false;
}

else if(edad == ''){
  alert('Edad esta vacio');
  return false;
}

else if(curso == ''){
  alert('Curso esta vacio');
  return false;
}

else if(puntuacion == ''){
  alert('Punctuación esta vacio');
  return false;
}else{
  return true;
}
}

//funciones comprobar actualizar
function validar2() {
  var id = document.getElementById("id").value;
  var nombre2 = document.getElementById("nombre2").value;
  var apellidos2 = document.getElementById("apellidos2").value;
  var edad2 = document.getElementById("edad2").value;
  var curso2 = document.getElementById("curso2").value;
  var puntuacion2 = document.getElementById("puntuacion2").value;

  if(id == ''){
    alert('ID esta vacio');
    return false;
  }

  if(nombre2 == ''){
    alert('Nombre esta vacio');
    return false;
  }

  else if(apellidos2 == ''){
    alert('Apellidos esta vacio');
    return false;
  }

  else if(edad2 == ''){
    alert('Edad esta vacio');
    return false;
  }

  else if(curso2 == ''){
    alert('Curso esta vacio');
    return false;
  }

  else if(puntuacion2 == ''){
    alert('Punctuación campo esta vacio');
    return false;
  }else{
    return true;
  }
  }

function seguro() {
texto=prompt('¿Seguro que quieres borrarlo?');
if (texto=='no') {
alert('OK.')
return false;
}
else if (texto=='si') {
return true;
}
}
