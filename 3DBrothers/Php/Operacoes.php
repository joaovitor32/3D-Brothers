 <?php 
  $Codigo=0;
   $SQLDelete="DELETE FROM Ocorrencia WHERE CodOcorrencia=".$Codigo."";
   mysqli_query($Conexao,$SQLDelete) or die(mysqli_error($Conexao));
   mysqli_close($Conexao);
?>