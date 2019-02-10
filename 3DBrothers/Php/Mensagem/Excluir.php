 <?php 
   $SQLDelete="DELETE FROM Ocorrencia WHERE CodOcorrencia=".$CodOcorrencia;
   mysqli_query($BD->ConectarBanco(),$SQLDelete) or die(mysqli_error($BD->ConectarBanco()));
   mysqli_close($BD->ConectarBanco());
?>