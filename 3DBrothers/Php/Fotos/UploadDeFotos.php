<?php
    include ('ConexaoFotos.php');

    $Imagem=$_FILES['Imagem1'];
    if($Imagem!=NULL){
        $NomeFinal= time().'.jpg';
        if(move_uploaded_file($Imagem['tmp_name'], $NomeFinal)){
            
            $TamanhoFinal=filesize($NomeFinal);
            $MysqlImagem=addslashes(fread(fopen($NomeFinal, "r"), $TamanhoFinal)); 
        
            $SQLInsercaoImagem="INSERT INTO Fotos (Imagem) VALUES ('$MysqlImagem')" or die("Não foi feito o upload");
            mysqli_query($BD->ConectarBanco(),$SQLInsercaoImagem) or die(mysqli_error($BD->ConectarBanco()));
            unlink($NomeFinal);
            header("location:DisplayFotos.php");
        }else{
            echo "Deu errado";
        }
    }
?>