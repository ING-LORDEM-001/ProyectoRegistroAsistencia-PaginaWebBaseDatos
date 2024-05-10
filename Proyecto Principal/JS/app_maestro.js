const cambiarAMatematicasMaestroBtn = document.getElementById("cambiarAMatematicasMaestro");
const mostrarSeccionDiv = document.getElementById("mostrarSeccion");

cambiarAMatematicasMaestroBtn.onclick = function() {
  // Agregar contenido al div mostrarSeccion
  mostrarSeccionDiv.innerHTML = "<iframe src='Materias_Maestro.php' style='width:89%; height:2000px; margin-right: -270px; margin-left: -85px; border: none;'></iframe>";
};






let cerrarSesion_btn = document.getElementById('cerrarSesion');

cerrarSesion_btn.onclick = function() {
    window.location.replace("index.html");
}