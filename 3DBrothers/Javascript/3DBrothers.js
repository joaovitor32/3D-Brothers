//1° Efeito de Barra
function BarraFixa() {
	var Navbar = document.getElementById("BarraDeNavegacao");
	var PosBarra = Navbar.offsetTop;
	if (window.scrollY > PosBarra) {
		Navbar.classList.add("StickyEffect");
	} else {
		Navbar.classList.remove("StickyEffect");
	}
}
//Efeito do H1 que esta no rodapé do site
function FadeInEffect() {
	var H1Bottom = document.getElementById("H1Bottom");
	var OpacityH1 = Number(H1Bottom.style.getPropertyValue('opacity'));
	if (OpacityH1 < 1) {
		OpacityH1 = OpacityH1 + 0.01;
		H1Bottom.style.opacity = OpacityH1;
	}
}

function H1Effects() {
	setInterval(FadeInEffect, 40);
}
function Rolamento(){
	
	/*$(document).ready(function () {
				$("#SearchNav").on("focus", function () {
			$(this).addClass("AtivoTagInput");
			}).on("blur", function () {
			$(this).removeClass("AtivoTagInput");
			});
		
			var alturas = {};
			var i = 0;
			$(".SecaoSite").each(function () {
				alturas[i] = $(this).offset().top;
				i++;
			});
			var TotalSecoes = i;
			var Seccao;
			$(window).on('scroll', function () {
				for (i = 1; i <= TotalSecoes; i++) {
					if ($(window).scrollTop() >= alturas[i]) {
						$('#Topo' + (i - 1)).removeClass('EfeitoScroll');
						$('#Topo' + (i + 1)).removeClass('EfeitoScroll');
						$('#Topo' + i).addClass('EfeitoScroll');
					}
				}
			});
		});
	}*/
	var searchNav=document.getElementById("SearchNav");


	searchNav.addEventListener('focus',searchNav.classList.add('AtivoTagInput'),true);
	searchNav.addEventListener('focus',searchNav.classList.remove('AtivoTagInput',false));


	var alturas = new Array();
	var i;
	var secSite=document.getElementsByClassName('SecaoSite');
<<<<<<< HEAD
	var lensecSite=secSite.length;
	for(i=0;i<lensecSite;i++){
		alturas[i]=Math.floor(secSite[i].offsetTop);
=======
	var lensecSite=secSite.length-1;
	for( i=0;i<lensecSite;i++){
		alturas[i]=secSite[i].offsetTop;
>>>>>>> 64b98920a2f684313c1331d9fd55f2505547d619
	}
	//Tá dando errado daqui para baixo
	window.onscroll=function(){
		BarraFixa();
		for(var j=1;j<=alturas.length;j++){
			if(window.scrollY>=alturas[j]){
				if(j-1>0){
					document.getElementById("Topo"+(j-1)).classList.remove("EfeitoScroll");
				}
				if(j+1<alturas.length){
					document.getElementById("Topo"+(j+1)).classList.remove("EfeitoScroll")
				}
				document.getElementById("Topo"+j).classList.add("EfeitoScroll");
			}   
		}
	}
}
function EfeitoTexto(){
	/*$(window).scroll(function () {
			if ($(this).scrollTop() > 85) {
				$("#PT1").removeClass("Inic1");
				$("#PT2").removeClass("Inic2");
				$("#PT3").removeClass("Inic1");
		}
	});*/
	var PT1=document.getElementById("PT1");
	var PT2=document.getElementById("PT2");
	var PT3=document.getElementById("PT3");
	if(window.scrollY>85){
		PT1.classList.remove("Inic1");
		PT2.classList.remove("Inic2");
		PT3.classList.remove("Inic1");
	}
}
window.onload = InitPage;
function InitPage() {
	//window.onscroll=function(){BarraFixa()};
	document.getElementById("H1Bottom").onmouseover = function () { H1Effects() };
	EfeitoTexto();
	Rolamento();
}

