<?php

     require('produtos_manutencao.php');
	 
	 $oquefazer = new produto_manutencao();
	 
	 $acao = $_REQUEST['acao'];
	 //echo "<br>acao =  $acao";
	 
	 if($acao == 'listar')
	 {
    	 @$filtro = $_REQUEST['pesquisa'];
	     //echo "filtro =  $filtro"; 
        $oquefazer->listar_produto();
		require('produtos_lista.php');
	 }

	 if($acao == 'excluir')
	 {
		$oquefazer->excluir();
		$oquefazer->listar_produto();
		require('produtos_lista.php');
	 }
	 
	 if($acao == 'incluir')
	 {
		require('produtos_form.php');
	 }

	 if($acao == 'gravar_incluir')
	 {
		$oquefazer->gravar_incluir();
		$oquefazer->listar_produto();
		require('produtos_lista.php');
	 }

	 if($acao == 'alterar')
	 {
		$oquefazer->alterar();
		require('produtos_form.php');
	 }

	 if($acao == 'gravar_alterar')
	 {
		$oquefazer->gravar_alterar();
		$oquefazer->listar_produto();
		require('produtos_lista.php');
	 }

	
?>