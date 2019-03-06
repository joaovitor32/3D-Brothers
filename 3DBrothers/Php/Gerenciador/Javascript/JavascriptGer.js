var A3DBro = document.getElementById("ALink");
var Botao1 = document.getElementById("Botao1");
var Botao2 = document.getElementById("Botao2");

function ativaBar(){
    if(A3DBro.style.display="none"){
        A3DBro.style.display="block";
        A3DBro.classList.add("LinkBox");
    }else{
        A3DBro.classList.remove("LinkBox");
        A3DBro.style.display="none";
    }
}
function tiraMenu(){
    A3DBro.style.display="none";
}