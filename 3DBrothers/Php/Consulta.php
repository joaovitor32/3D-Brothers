<?php
    session_start();
    $BD=new BancoDeDados();
    $SQL="SELECT * FROM Ocorrencia";
	$Consulta=mysqli_query($BD->ConectarBanco(),$SQL) or die(mysqli_error($Conexao));
    $Linhas= array();
?>