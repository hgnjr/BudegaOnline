<?php
     //echo "produto_manutencao<br>";
   class produto_manutencao
   {
       var $resultado;
	   var $registros;
	   
	   function produto_manutencao() //metodo construtor
	   {
             $this->con = new conexao();		   
	   }       
	   function listar_produto()
	   {
		    @$ordenacao = $_REQUEST['ordem'];
			if ($ordenacao == '')
			   $ordenacao = "PROD_DESCRICAO";

		    @$filtro = $_REQUEST['pesquisa'];
			if ($filtro == '')
			    @$filtrar_por == '';
	 		else
			   $filtrar_por = $filtro;

			   
			$sql = "select * from tbl_produto where PROD_DESCRICAO like '".@$filtrar_por."%' order by ".$ordenacao;
            $this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function excluir()	   
	   {

		   	$sql = "delete from tbl_produto where PROD_CODIGO = ".$_REQUEST['codigo'];
        	if($this->resultado = $this->con->banco->Execute($sql))
			{
			     alerta("O registro foi excluido com sucesso")	;
				 return true;
			}
			else
			{
			     alerta("Nao foi possivel exluir")	;
				 return false;
			}	   
	   }
	   
   	   function gravar_incluir()
	   {
		   	$sql = "insert into tbl_produto (PROD_DESCRICAO, PROD_VALOR, PROD_QUANTIDADE, CAT_CODIGO, FOR_CODIGO, PROD_TIPO, PROD_OBS) values ('".$_POST['prod_descricao']."',".$_POST['prod_valor'].",".$_POST['prod_quantidade'].",".$_POST['cat_codigo'].",".$_POST['for_codigo'].",'".$_POST['prod_tipo']."','".$_POST['prod_obs']."')";
        	if($this->resultado = $this->con->banco->Execute($sql))
			{
			     alerta("O registro foi incluido com sucesso")	;
				 return true;
			}
			else
			{
			     alerta("Nao foi possivel gravar")	;
				 return false;
			}

	   }
   	   function alterar()
	   {
		   	$sql = "select * from tbl_produto where PROD_CODIGO = ".$_REQUEST['codigo'];
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
	   }
   	   function gravar_alterar()
	   {
		   	$sql = "update tbl_produto  set  PROD_DESCRICAO ='".$_POST['prod_descricao']."', PROD_VALOR = ".$_POST['prod_valor'].", PROD_QUANTIDADE = ".$_POST['prod_quantidade'].", CAT_CODIGO = ".$_POST['cat_codigo'].", FOR_CODIGO = ".$_POST['for_codigo'].", PROD_TIPO ='".$_POST['prod_tipo']."', PROD_OBS = '".$_POST['prod_obs']."' where PROD_CODIGO = ".$_POST['codigo'];
        	$this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function total_registros()
	   {
		   	$sql = "select count(*) as TOTAL from tbl_produto";
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
		    return $this->registros->TOTAL;
	   }
	   
	   function listar_categorias()
	   {
		      $retorna = '';   
			  $sql = "select * from tbl_categoria order by CAT_DESCRICAO";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcat = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if(@$this->registros->CAT_CODIGO == $regcat->CAT_CODIGO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna . '<option value="'.$regcat->CAT_CODIGO.'"'.$selecionado.'>'.$regcat->CAT_DESCRICAO.'</option>'; 
			  
			  }
			  
	          /*$retorna = $retorna . '<option value="1">Carazinho</option>';
	          $retorna = $retorna . '<option value="2">Passo Fundo</option>';
	          $retorna = $retorna . '<option value="3">Maravilha</option>';
	          $retorna = $retorna . '<option value="4">Gurupi</option>';		
			  */
			  return $retorna;
	   }

	   function listar_fornecedores()
	   {
		      $retorna = '';   
			  $sql = "select * from tbl_fornecedor order by FOR_RAZAOSOCIAL";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regfor = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if(@$this->registros->FOR_CODIGO == $regfor->FOR_CODIGO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna . '<option value="'.$regfor->FOR_CODIGO.'"'.$selecionado.'>'.$regfor->FOR_RAZAOSOCIAL.'</option>'; 
			  
			  }
			  
	          /*$retorna = $retorna . '<option value="1">Carazinho</option>';
	          $retorna = $retorna . '<option value="2">Passo Fundo</option>';
	          $retorna = $retorna . '<option value="3">Maravilha</option>';
	          $retorna = $retorna . '<option value="4">Gurupi</option>';		
			  */
			  return $retorna;
	   }



   }
?>