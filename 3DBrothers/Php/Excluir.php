 <?php 
   session_start();
   $BD=new BancoDeDados();
   $SQLDelete="DELETE FROM Ocorrencia";
   mysqli_query($BD->ConectarBanco(),$SQLDelete) or die(mysqli_error($Conexao));
   mysqli_close($BD->ConectarBanco());
?>