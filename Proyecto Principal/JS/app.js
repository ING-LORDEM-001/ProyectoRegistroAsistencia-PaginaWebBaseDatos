//funcionalidad oculta agregar materias y quitar materias
/*
let botonMateria = document.getElementById('agregarMateria');
let cajaMateria = document.getElementById('cajaMateria');

function ocultarBotonMostrarInput() {
    botonMateria.classList.remove('sidebar__button');
    botonMateria.classList.add('oculto');
    cajaMateria.classList.remove('oculto');
    cajaMateria.classList.add('agregar__materia--box');
    cajaMateria.classList.add('mostrar');

}

function ocultarInputMostrarBoton(){
    botonMateria.classList.add('sidebar__button');
    botonMateria.classList.remove('oculto');
    cajaMateria.classList.add('oculto');
    cajaMateria.classList.remove('agregar__materia--box');
    cajaMateria.classList.remove('mostrar');
}


function agregarMateria() {
    const inputMateria = document.getElementById('nombreMateria');
    const ulMaterias = document.querySelector('.sidebar__menu');
    const nuevaMateria = document.createElement('li');
    nuevaMateria.innerHTML = `<a href="#" class="sidebar__link--agregada">${inputMateria.value}</a><a href="" class="sidebar__link--delete"><ion-icon name="trash-outline"></ion-icon></a>`;
    ulMaterias.appendChild(nuevaMateria);
    inputMateria.value = '';
  } 
*/
  

  let tituloSinInputs = document.querySelector(".titulo__pagina");
  let botonAgregar = document.getElementById('agregarAlumno');
  let datosAlumno = document.getElementById('agregarAlumnoBox');

  function ocultarAgregarMostrarInputs(){
    tituloSinInputs.classList.remove("titulo__pagina");
    tituloSinInputs.classList.add("titulo__pagina--coninputs");
    botonAgregar.classList.remove("agregar__alumno--btn");
    botonAgregar.classList.add("oculto");
    datosAlumno.classList.remove("oculto");
    datosAlumno.classList.add("datos__alumno");
  }

  function ocultarInputsMostrarBoton(){
    tituloSinInputs.classList.add("titulo__pagina");
    tituloSinInputs.classList.remove("titulo__pagina--coninputs");
    botonAgregar.classList.add("agregar__alumno--btn");
    botonAgregar.classList.remove("oculto");
    datosAlumno.classList.add("oculto");
    datosAlumno.classList.remove("datos__alumno");
  }



  function agregarFila() {
    // Obtener los valores de los inputs
    var nombre = document.getElementById("nombre").value;
    var asistencias = document.getElementById("asistencias").value;
    var faltas = document.getElementById("faltas").value;
  
    // Validar que se ingresó al menos un valor antes de agregar la fila
    if (nombre.trim() === "" && asistencias.trim() === "" && faltas.trim() === "") {
      return; // No hacer nada si no se ingresó ningún valor
    }
  
    // Crear una nueva fila en la tabla con los valores de los inputs
    var tabla = document.getElementById("tabla");
    var nuevaFila = tabla.insertRow(-1);
    var celdaNombre = nuevaFila.insertCell(0);
    var celdaAsistencias = nuevaFila.insertCell(1);
    var celdaFaltas = nuevaFila.insertCell(2);
    var celdaEliminar = nuevaFila.insertCell(3);
    celdaNombre.innerHTML = nombre;
    celdaAsistencias.innerHTML = asistencias;
    celdaFaltas.innerHTML = faltas;
    celdaEliminar.innerHTML = '<button onclick="eliminarFila(this)" class="agregar__alumno--btn-active">Eliminar</button>';
  
    // Limpiar los valores de los inputs
    document.getElementById("nombre").value = "";
    document.getElementById("asistencias").value = "";
    document.getElementById("faltas").value = "";
  }

  function eliminarFila(boton) {
    // Obtener la fila que contiene el botón eliminar
    var fila = boton.parentNode.parentNode;
  
    // Eliminar la fila de la tabla
    fila.parentNode.removeChild(fila);
  }


//cambiar entre secciones

const cambiarAMaestrosBtn = document.getElementById("cambiarAMaestros");
const mostrarSeccionDiv = document.getElementById("mostrarSeccion");

cambiarAMaestrosBtn.onclick = function() {
  // Agregar contenido al div mostrarSeccion
  mostrarSeccionDiv.innerHTML = "<iframe src='Administracion_maestros/PHP/index_tbmaestros.php' style='width:70%; height:2000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};

const cambiarAAlumnosBtn = document.getElementById("cambiarAAlumnos");
const mostrarSeccionDiv2 = document.getElementById("mostrarSeccion");

cambiarAAlumnosBtn.onclick = function() {
    // Agregar contenido al div mostrarSeccion
  mostrarSeccionDiv.innerHTML = "<iframe src='Administracion_tbalumno/PHP/index_tbalumnos.php' style='width:70%; height:2000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};

const cambiarAMateriasBtn = document.getElementById("cambiarAMaterias");
const mostrarSeccionDiv3 = document.getElementById("mostrarSeccion");

cambiarAMateriasBtn.onclick = function() {
    
  mostrarSeccionDiv.innerHTML = "<iframe src='Administracion_Materias/PHP/index_tbmaterias.php' style='width:70%; height:2000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};

const cambiarAAlumMateriasBtn = document.getElementById("cambiarAAlumMaterias");
const mostrarSeccionDiv4 = document.getElementById("mostrarSeccion");

cambiarAAlumMateriasBtn.onclick = function() {
    
  mostrarSeccionDiv.innerHTML = "<iframe src='Administracion_AlumMaterias/PHP/index_AlumMaterias.php' style='width:70%; height:2000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};

const cambiarAUsuariosBtn = document.getElementById("cambiarAUsuarios");
const mostrarSeccionDiv5 = document.getElementById("mostrarSeccion");

cambiarAUsuariosBtn.onclick = function() {
    
  mostrarSeccionDiv.innerHTML = "<iframe src='Administracion_usuarios/PHP/index_usuarios.php' style='width:70%; height:2000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};



//cerrar sesion 

let cerrarSesion_btn = document.getElementById('cerrarSesion');

cerrarSesion_btn.onclick = function() {
    window.location.replace("index.html");
}




