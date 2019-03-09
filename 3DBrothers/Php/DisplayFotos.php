	<?php
		require("BarraDeNavegacaoGerenciador.php");
		include ('../Php/Sistema/Fotos/ConexaoFotos.php');
	?>
		<div class="container boxContainer">
			<div class="row">
				<div class="col-md-12 offset-3">
					<form method="POST"  action="Sistema/Fotos/UploadDeFotos.php" enctype="multipart/form-data">
						<label>Imagem:</label>
						<input name="Imagem1" type="file" >
						<input class="inputBotao" type="submit" value="Cadastrar">
					</form>
				</div>
			<div>
		</div>
		<div class="container boxContainer">
			<div class="row">
				<div class="col-md-12 offset-1">
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
										echo "<td><img class='PadraoImagem' src='Sistema/Fotos/PegaImagem.php?Id=$Row->CodFoto'></td>"; 
										echo "<td><button><a class='deletaImagem' href='/3D-Brothers/3DBrothers/Php/Sistema/Fotos/DeletarFoto.php?Id=".$Row->CodFoto."'>Deletar Foto</button></td>";
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


