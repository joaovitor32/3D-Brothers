$(document).ready(function(){

	//Header
	$("#SearchNav").on("focus", function(){
		$(this).addClass("AtivoTagInput");
	}).on("blur",function(){
		$(this).removeClass("AtivoTagInput");
	});
	// Efeito Quem Somos
	$(window).scroll(function(){
		if($(this).scrollTop()>85){
			$("#PT1").removeClass("Inic1");
			$("#PT2").removeClass("Inic2");
			$("#PT3").removeClass("Inic1");
		}
	});
	//Efeito variação do scroll
	//Armazena as secções que vao mudar e var Topos vai acumular Topo1 Topo2 e Topo3
 	var alturas={};
	var i=1;
	$(".SecaoSite").each(function(){
		alturas[i]=$(this).offset().top;
		i++;
	});
	var TotalSecoes=i;
	var Seccao;
	$(window).on('scroll',function(){
		for(i=1;i<=TotalSecoes;i++){
			if($(window).scrollTop()>=alturas[i]){
				$('#Topo'+(i-1)).removeClass('EfeitoScroll');
				$('#Topo'+(i+1)).removeClass('EfeitoScroll');
				$('#Topo'+i).addClass('EfeitoScroll');
			}	
		}
	});


});
//1° Efeito de Barra
var Navbar = document.getElementById("BarraDeNavegacao");
var PosBarra = Navbar.offsetTop;
function BarraFixa(){
	if(window.scrollY>PosBarra){
		Navbar.classList.add("StickyEffect");
	}else{
		Navbar.classList.remove("StickyEffect");
	}
}
window.onscroll=function(){BarraFixa()};
//Essa Parte é da página ModalCampoVazio.php
