<?php
	require_once __DIR__.'/Conexao.php';	
	
	$Nome = $_POST['Nome'];
	$Email=$_POST['Email'];
	$Telefone=$_POST['Telefone'];
	$Mensagem=$_POST['Mensagem'];

	$SQLUpdate="INSERT INTO Ocorrencia (Nome,Email,Telefone,Mensagem) VALUES (".$Nome.",".$Email.",".$Telefone.",".$Mensagem.")";
	if($Conexao->query($SQLUpdate)==true){
		echo "O insert foi feito com sucesso";
	}else{
		echo "O insert nao foi feito com sucesso"; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	
</head>
	<body>
		<a href="Display.php">Display de dados</a>
	</body>
</html>
