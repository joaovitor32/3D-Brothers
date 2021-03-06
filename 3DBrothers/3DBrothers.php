<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="Css/3DBrothers.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWjVXYT1cChZyRYUBxSq__ecZ818Jdm1k&callback=initMap"></script>
	<title>3D Brothers</title>
</head>
	<?php
		include ('ConexaoFotos.php');
	?>   
	<script type="text/javascript">
		/*Mascara do telefone*/
		function mascara(o,f){
			v_obj=o
			v_fun=f
			setTimeout("execmascara()",1)
		}
		function execmascara(){
			v_obj.value=v_fun(v_obj.value)
		}
		function mtel(v){
			v=v.replace(/\D/g,"");
			v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
			v=v.replace(/(\d)(\d{4})$/,"$1-$2");
			return v;
		}
		function id( el ){
			return document.getElementById( el );
		}
		window.onload = function(){
			id('telefone').onkeypress = function(){
				mascara( this, mtel );
			}
		}
	</script>
		<section id="Topico1" class="SecaoSite">
			<div class="SecEsp QTDSite" data-section="Home">
				<div class="DiviSubtopicos">Home</div>
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="CarrosselContainer">
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
											<?php 
												while($Row= mysqli_fetch_object($ConsultaFoto)){
													$Linha[]=$Row->CodFoto;
												}
												echo "<div class=\"carousel-item active\"><img class=\"d-block w-100 FotoCarrossel\" src='/3D-Brothers/3DBrothers/Php/Sistema/Fotos/PegaImagem.php?Id=$Linha[0]'></div>"; 
												$TamVet=count($Linha);
												for($i=1;$i<$TamVet;++$i){
													echo "<div class=\"carousel-item \"><img class=\"d-block w-100 FotoCarrossel\" src='/3D-Brothers/3DBrothers/Php/Sistema/Fotos/PegaImagem.php?Id=$Linha[$i]'></div>"; 
												}
											?>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control PonteiroCarrossel" aria-hidden="true"></span>
									    <span class="fas fa-arrow-left SetasCarrossel"></span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									    <span class="carousel-control" aria-hidden="true"></span>
									    <span class="fas fa-arrow-right SetasCarrossel"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="CarrosselTextoTopo"><p>Somos uma empresa de prototipagem, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in augue id erat viverra hendrerit. Nunc ut cursus neque. Integer convallis sapien consequat auctor mollis. Integer at erat sem. Quisque dictum pretium diam, eget auctor odio varius vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet ligula nunc, vitae tincidunt erat mollis consectetur. Pellentesque dapibus orci arcu. Nunc tellus ante, venenatis condimentum facilisis a, placerat a massa. Etiam lacus lorem, condimentum quis fringilla quis, suscipit non nunc.</p></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="SecaoSite"  data-section="QuemSomos" id="Topico2">
			<div id="PT1" class="TopGeral Inic1">
				<div class="DiviSubtopicos">Empresa</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div>
								<img class="TopEmpImg" src="img/TopEmpresa.jpeg">
							</div>
						</div>
						<div class="col-md-6">
							<div class="TopEmpresa">
								<h4><li>História:</li></h4>
								<p>Somos uma empresa localizada, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in augue id erat viverra hendrerit. Nunc ut cursus neque. Integer convallis sapien consequat auctor mollis. Integer at erat sem. Quisque dictum pretium diam, eget auctor odio varius vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet ligula nunc, vitae tincidunt erat mollis consectetur. Pellentesque dapibus orci arcu. Nunc tellus ante, venenatis condimentum facilisis a, placerat a massa. Etiam lacus lorem, condimentum quis fringilla quis, suscipit non nunc.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="PT2" class="TopGeral Inic2">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="IPRJ">
								<h4><li>Meio Operacional:</li></h4>
								<p>O IPRJ é uma faculdade, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in augue id erat viverra hendrerit. Nunc ut cursus neque. Integer convallis sapien consequat auctor mollis. Integer at erat sem. Quisque dictum pretium diam, eget auctor odio varius vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet ligula nunc, vitae tincidunt erat mollis consectetur. Pellentesque dapibus orci arcu. Nunc tellus ante, venenatis condimentum facilisis a, placerat a massa. Etiam lacus lorem, condimentum quis fringilla quis, suscipit non nunc.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div>
								<img class="TopFaculImg" src="img/IPRJCara.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="PT3" class="TopGeral Inic1">
				<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div>
									<img class="TopNegociosImg" src="img/Sebrae.jpg">
								</div>
							</div>
						<div class="col-md-6">
							<div class="TopNegocios">
								<h4><li>Negócios:</li></h4>
								<p>Somos uma empresa que trabalha com prototipagem, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in augue id erat viverra hendrerit. Nunc ut cursus neque. Integer convallis sapien consequat auctor mollis. Integer at erat sem. Quisque dictum pretium diam, eget auctor odio varius vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet ligula nunc, vitae tincidunt erat mollis consectetur. Pellentesque dapibus orci arcu. Nunc tellus ante, venenatis condimentum facilisis a, placerat a massa. Etiam lacus lorem, condimentum quis fringilla quis, suscipit non nunc.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="LastSection" id="Topico3" class="SecaoSite SecEsp">
			<div class="DiviSubtopicos">Contato</div>
			<div class="container" data-section="Contato">
				<div class="row">
					<div class="col-md-6">
						<div><iframe id="Map" src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;q=Brazil%2CNova%20Friburgo%2CJos%C3%A9%20Aristides%20Pereira+(3DBrothers)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe></div><br />
					</div>
					<div class="col-md-6">
						<div class="Caixa2">
							<form action="Php/Sistema/Mensagem/Contato.php" method="post">
								<label for="contato_nome" class="ContatoLabel" >Nome:</label><br>
								<input class="InputContato" type="text" name="Nome" placeholder="Digite seu nome aqui:"><br>
								<label class="ContatoLabel">Email:</label><br>
								<input class="InputContato" type="text" name="Email" placeholder="Digite aqui seu email:"><br>
								<label class="ContatoLabel">Telefone:</label><br>
								<input class="InputContato" id="telefone" maxlength="15" type="text" name="Telefone" placeholder="Telefone:"><br>
								<label class="ContatoLabel">Mensagem:</label><br>
								<textarea class="TextareaContato"  name="Mensagem"></textarea><br>
								<button class="btn BotaoContato">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section >
			<div class="container">
				<div class="row">
					<div class="col-md-12 offset-2">					
						<h1 id="H1Bottom">3DBrothers: Pioneira na região</h1>
					</div>
				</div>
			</div>
		</section>
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="Javascript/3DBrothers.js"></script>
	</body>
</html>