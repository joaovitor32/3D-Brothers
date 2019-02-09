<?php
    $SQL="SELECT * FROM Ocorrencia";
	$Consulta=mysqli_query($Conexao,$SQL) or die(mysqli_error($Conexao));
	mysqli_set_charset($Conexao,'utf8');
    $Linhas= array();
    

   $Codigo=$CodOcorrencia;
   $SQLDelete="DELETE FROM Ocorrencia WHERE CodOcorrencia=".$Codigo."";
   mysqli_query($Conexao,$SQLDelete) or die(mysqli_error($Conexao));
   mysqli_close($Conexao);
?>