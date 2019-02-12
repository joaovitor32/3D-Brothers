<?php
    include ('ConexaoFotos.php');
    $BD=new BancoDeDados();
    $Id=$_GET['Id'];
    $SQLSelectImagem="SELECT * FROM Foto WHERE CodFoto=$Id";
    $ConsultaFoto=mysqli_query($BD->ConectarBanco(),$SQLSelectImagem);
    $Row=mysqli_fetch_object($ConsultaFoto);
    Header( "Content-type: image/gif"); 
    echo $Row->Imagem;

?>