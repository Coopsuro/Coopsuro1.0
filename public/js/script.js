const $abrir = document.querySelector(".abrir")
const $Cerrar = document.querySelector(".Cerrar")
const $nav = document.querySelector(".nav")

function abrir(){
    $nav.classList.add("nav-visible");
    $abrir.classList.add("ocultarBoton");
}

function Cerrar(){
    $nav.classList.remove("nav-visible");
    $abrir.classList.remove("ocultarBoton");
}


$abrir.addEventListener("click" , abrir)
$Cerrar.addEventListener("click" , Cerrar)
