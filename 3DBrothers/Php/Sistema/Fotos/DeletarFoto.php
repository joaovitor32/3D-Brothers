<?php
    include ('ConexaoFotos.php');
    $Id=$_GET['Id'];
    if(isset($Id)){
        $SQLDelete="DELETE FROM Fotos WHERE CodFoto='$Id'" or die('Nao foi possivel rodar a query');
        mysqli_query($BD->ConectarBanco(),$SQLDelete);
        header("location:/3D-Brothers/3DBrothers/Php/DisplayFotos.php"); 
    }else{
        echo mysqli_error($BD->ConectarBanco());
    }
?>