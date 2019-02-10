 <?php 
  include ('Conexao.php');
  $BD=new BancoDeDados();  
  if(isset($_GET['Id'])){   
    $CodOcorrencia=$_GET['Id'];
    $SQLDelete="DELETE FROM Ocorrencia WHERE CodOcorrencia='$CodOcorrencia'";
    if(mysqli_query($BD->ConectarBanco(),$SQLDelete)){
        mysqli_error($BD->ConectarBanco());
        header("location:/3D-Brothers/3DBrothers/Php/Mensagem/Display.php/");  
    }else{
      echo mysqli_error($Conexao);
    }
  }
?>
