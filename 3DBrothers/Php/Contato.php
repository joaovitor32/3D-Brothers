<?php
	include 'Conexao.php';	
	
	$Nome = $_POST['Nome'];
	$Email=$_POST['Email'];
	$Telefone=$_POST['Telefone'];
	$Mensagem=$_POST['Mensagem'];

<<<<<<< HEAD
	$SQLInsert="INSERT INTO Ocorrencia (Nome, Email, Telefone, Mensagem) VALUES('".$Nome."','".$Email."','".$Telefone."','".$Mensagem."')";		
	mysqli_query($Conexao, $SQLInsert);
	mysqli_close($Conexao);

	$Redirecionar="/3D-Brothers/3DBrothers/";
	header("location:$Redirecionar");
?>

=======
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
>>>>>>> 18c70acdcd4751eb16c55b7b0ee4ebb44b6b86fb
