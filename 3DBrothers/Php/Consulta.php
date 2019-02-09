<?php
    $SQL="SELECT * FROM Ocorrencia";
	$Consulta=mysqli_query($Conexao,$SQL) or die(mysqli_error($Conexao));
    $Linhas= array();
?>