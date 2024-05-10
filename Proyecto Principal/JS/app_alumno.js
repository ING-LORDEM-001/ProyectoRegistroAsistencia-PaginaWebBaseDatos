const cambiarAMateriasAlumBtn = document.getElementById("cambiarAMateriasAlum");
const mostrarSeccionDiv = document.getElementById("mostrarSeccion");

cambiarAMateriasAlumBtn.onclick = function() {
  // Agregar contenido al div mostrarSeccion
  mostrarSeccionDiv.innerHTML = "<iframe src='materias_alumno.php' style='width:89%; height:3000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};

const cambiarAFisicaBtn = document.getElementById("cambiarAFisica");
const mostrarSeccionDiv2 = document.getElementById("mostrarSeccion");

cambiarAFisicaBtn.onclick = function() {
    
  mostrarSeccionDiv.innerHTML = "<iframe src='fisica_alumno.php' style='width:89%; height:3000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};





let cerrarSesion_btn = document.getElementById('cerrarSesion');

cerrarSesion_btn.onclick = function() {
    window.location.replace("index.html");
}