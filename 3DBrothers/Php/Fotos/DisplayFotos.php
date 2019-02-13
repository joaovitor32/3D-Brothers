<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="Css/SistemaFotos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWjVXYT1cChZyRYUBxSq__ecZ818Jdm1k&callback=initMap"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>
	<?php
		include ('ConexaoFotos.php');
	?>
	<body class="CorBody" id="Fundo">
		<div class="container">
			<div class="row">
				<div class="col-md-12 offset-3">
					<form method="POST"  action="UploadDeFotos.php" enctype="multipart/form-data">
						Imagem: <input name="Imagem1" type="file" >
						<input type="submit" value="Cadastrar">
					</form>
				</div>
			<div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table">
 						 <thead>
    						<tr>
      							<th scope="col">Código</th>
      							<th scope="col">Foto:</th>
								<th scope="col">Operação:</th>
   							 </tr>
 	 					</thead>
  						<tbody>
    						<tr>
								<?php 
									$SQLSelect="SELECT * FROM Fotos";
									$ConsultaFoto=mysqli_query($BD->ConectarBanco(),$SQLSelect);
									
									while($Row= mysqli_fetch_object($ConsultaFoto)){
										echo '<tr>';
										echo '<td>'.$Row->CodFoto.'</td>';
										echo "<td><img class='PadraoImagem' src='PegaImagem.php?Id=$Row->CodFoto'></td>"; 
										echo "<td><button><a href='/3D-Brothers/3DBrothers/Php/Fotos/DeletarFoto.php?Id=".$Row->CodFoto."'>Deletar Foto</button></td>";
										echo '</tr>';
									}
								?>
    						</tr>
  						</tbody>
					</table>
				</div>
			</div>
		</div>	
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="Javascript/3DBrothers.js"></script>
	</body>
</html>


