<?php
	include 'Conexao.php';	
	
	$Nome = $_POST['Nome'];
	$Email=$_POST['Email'];
	$Telefone=$_POST['Telefone'];
	$Mensagem=$_POST['Mensagem'];
	$SQLInsert="INSERT INTO Ocorrencia (Nome, Email, Telefone, Mensagem) VALUES('".$Nome."','".$Email."','".$Telefone."','".$Mensagem."')";		
	mysqli_query($Conexao, $SQLInsert);
	mysqli_close($Conexao);
	$Redirecionar="/3D-Brothers/3DBrothers/";
	header("location:$Redirecionar");
?>
