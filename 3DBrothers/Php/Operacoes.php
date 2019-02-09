<?php
    $SQL="SELECT * FROM Ocorrencia";
	$Consulta=mysqli_query($Conexao,$SQL) or die(mysqli_error($Conexao));
	mysqli_set_charset($Conexao,'utf8');
    $Linhas= array();
    
   $Codigo=$_POST['Codigo'];
   $SQLDelete="DELETE FROM Ocorrencia WHERE CodOcorrencia=".$Codigo."";
   mysqli_query($Conexao,$SQLDelete);
?>