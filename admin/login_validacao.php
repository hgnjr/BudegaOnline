<?php

    session_start();
    if (($_POST['usu_login'] != '') && ($_POST['usu_senha'] != ''))
	{
	   //echo "ok, digitou usuario e senha";
	   require('../util/conecta.php');
	   $sql = "select * from tbl_usuario where USU_LOGIN = '".($_POST['usu_login'])."' and USU_SENHA = '".base64_encode($_POST['usu_senha'])."'";

	   $resultado = $con->banco->Execute($sql);
	   if($registro = $resultado->FetchNextObject())
	   {
	   	//alerta("usuario valido");
		session_register('sessao_codigo_usuario');
				  session_register('sessao_codigo_usuario');
		  $_SESSION['sessao_codigo_usuario'] = $registro->USU_CODIGO;
		  session_register('sessao_nome_usuario');
		  $_SESSION['sessao_nome_usuario'] = $registro->USU_NOME;
		  session_register('sessao_nivel_usuario');
		  $_SESSION['sessao_nivel_usuario'] = $registro->USU_NIVEL;
	   	direciona('index.php');
		exit;
	   
	   }
	   else
	   {
		alerta("usuario nao valido");
		voltar();
		exit;
		}
		}
		else
		
	   echo "Voce precisa digitar o nome do usuario ou a senha";
?>