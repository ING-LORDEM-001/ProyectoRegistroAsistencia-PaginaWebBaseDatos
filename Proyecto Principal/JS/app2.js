let botonAcercaDe = document.getElementById("acercaDeBtn");
let acercaDeContenido = document.getElementById("acercaDe");
let footer = document.getElementById("footerId");
let cerrar = document.getElementById("cerrar");

botonAcercaDe.onclick = function () {
  acercaDeContenido.classList.add("acerca_de");
  acercaDeContenido.classList.add("animacion");
  acercaDeContenido.classList.remove("oculto_2");
  footer.classList.add("oculto");
  footer.classList.remove("footer");
}

cerrar.onclick = function () {
    acercaDeContenido.classList.remove("acerca_de");
    acercaDeContenido.classList.remove("animacion");
    acercaDeContenido.classList.add("oculto_2");
    footer.classList.remove("oculto");
    footer.classList.add("footer");
}




