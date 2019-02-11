<?php
    include ('ConexaoFotos.php');
    $BD=new BancoDeDados();

    $Imagem=$_FILES["Image"];
    if($Imagem!=NULL){
        $NomeFinal= time().'.jpg';
        if(move_uploaded_file($Imagem['tmp_name'], $NomeFinal)){
            
            $TamanhoFinal=filesize($NomeFinal);
            $MysqlImagem=addslashes(fread(fopen($NomeFinal, "r"), $TamanhoFinal)); 
        
            $SQLInsercaoImagem="INSERT INTO Fotos (Imagem) VALUES ('$MysqlImagem')" or die("Não foi feito o upload");
            mysqli_query($BD->ConectarBanco(),$SQLInsercaoImagem) or die(mysqli_error($BD->ConectarBanco()));
            mysqli_close($BD->ConectarBanco());
            unlink($NomeFinal);
            header("location:/3D-Brothers/3DBrothers/Php/Fotos/DisplayFotos.php/");
        }else{
            echo "Deu errado";
        }
    }
?>