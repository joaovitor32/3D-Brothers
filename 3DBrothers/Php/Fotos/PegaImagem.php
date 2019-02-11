<?php
    $BD=new BancoDeDados();
    $Id=$_GET['Id'];
    $SQLSelectImagem="SELECT * FROM Fotos WHERE CodFoto='$Id'";
    $ConsultaFoto=mysqli_query($BD->ConectarBanco(),$SQLSelectImagem);
    $Linha=mysqli_fetch_object($ConsultaFoto);
    echo $Linha->Imagem;
?>