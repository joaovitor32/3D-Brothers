<?php
	include ('Conexao.php');	
	
	$BD=new BancoDeDados();

	$Nome = $_POST['Nome'];
	$Email=$_POST['Email'];
	$Telefone=$_POST['Telefone'];
	$Mensagem=$_POST['Mensagem'];

	$SQLInsert="INSERT INTO Ocorrencia (Nome, Email, Telefone, Mensagem) VALUES('".$Nome."','".$Email."','".$Telefone."','".$Mensagem."')";		
	mysqli_query($BD->ConectarBanco(), $SQLInsert);
	mysqli_close($BD->ConectarBanco());

	$Redirecionar="/3D-Brothers/3DBrothers/";
	header("location:$Redirecionar");
?>

