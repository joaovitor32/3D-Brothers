<?php
    session_start();
    require('../Php/Sistema/Fotos/ConexaoFotos.php');

    $BD=new BancoDeDados();
    $ConectaBD=$BD->ConectarBanco();

    $Login=$_POST['login'];
    $Senha=md5($_POST['senha']); 

    $SQLConsulta="SELECT * FROM Usuario WHERE Login='$Login' AND Senha='$Senha' LIMIT 1";

    if(isset($Login) and isset($Senha)){
        $resultadoConsulta=mysqli_query($ConectaBD,$SQLConsulta);
        if($resultadoConsulta){
            $usuario=mysqli_fetch_assoc($resultadoConsulta);
            $_SESSION['login']=$usuario['login'];
            $_SESSION['senha']=$usuario['senha'];
            header('Location: Gerenciador.php');
        }else{
            header('Location: index.php?erro=1');
        }
    }else{
        header('Location: index.php?erro=1');
    }
?>