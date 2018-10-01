<?php
	$EmailEnviar="joaovitormunizlopes@gmail.com";

	$Nome=$_POST['Nome'];
	$Email=$_POST['Email'];
	$Telefone=$_POST['Telefone'];
	$Mensagem=$_POST['Mensagem'];
	
	//Criar funções para verificar o formulário, essa Parte vai verificar se os dados estão corretos
	$VerificaCampos = empty($Nome||$Email||$Telefone||$Mensagem);
	if($VerificaCampos){
		header("Location: http://localhost/3DBrothers/CampoVazio.php");
	}
	//Script PHP para mandar dados do formulário via email
	$Mensagem3DB ='<p> Mensagem recebida através do site</p>
					<h3>Nome:'.$Nome.'<h3>
					<h3 E-Mail:'.$Email.'<h3
					<h3>Telefone:'.$Telefone.'<h3>
					<p>Mensagem:'.$Mensagem.'<h3>';

	
	$headers='MIME-Version: 1.1'."\r\n";
	$headers .='Content-type:text/html; charset=iso-8859-1'."\r\n";
	$headers .= 'From:$nome<$email>';

	$EnviarEmail=mail($EmailEnviar,'Contato site 3DBrothers',$Mensagem3DB,$headers);
	if($EnviarEmail){
		echo "Email Enviado com sucesso";
	}else{
		echo "Operação falhou";
	}


?>