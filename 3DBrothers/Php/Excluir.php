 <?php 
   
   $SQLDelete="DELETE FROM Ocorrencia";
   mysqli_query($Conexao,$SQLDelete) or die(mysqli_error($Conexao));
   mysqli_close($Conexao);
?>