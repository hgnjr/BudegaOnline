<?php
     //echo "fornecedor_manutencao<br>";
   class fornecedor_manutencao
   {
       var $resultado;
	   var $registros;
	   
	   function fornecedor_manutencao() //metodo construtor
	   {
             $this->con = new conexao();		   
	   }       
	   function listar_fornecedor()
	   {
		    @$ordenacao = $_REQUEST['ordem'];
			if ($ordenacao == '')
			   $ordenacao = "FOR_RAZAOSOCIAL";

		    @$filtro = $_REQUEST['pesquisa'];
			if ($filtro == '')
			    @$filtrar_por == '';
	 		else
			   $filtrar_por = $filtro;

			   
			@$sql = "select * from tbl_fornecedor where FOR_RAZAOSOCIAL like '".$filtrar_por."%' order by ".$ordenacao;
            $this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function excluir()	   
	   {

		   	$sql = "delete from tbl_fornecedor where FOR_CODIGO = ".$_REQUEST['codigo'];
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
		   	$sql = "insert into tbl_fornecedor (CID_CODIGO, FOR_RAZAOSOCIAL, FOR_NOME_FANTASIA, FOR_ENDERECO, FOR_BAIRRO, FOR_FONE, FOR_RESPONSAVEL, FOR_EMAIL, FOR_CNPJ, FOR_CEP) values (".$_POST['cid_codigo'].",'".$_POST['for_razaosocial']."','".$_POST['for_nome_fantasia']."','".$_POST['for_endereco']."','".$_POST['for_bairro']."','".$_POST['for_fone']."','".$_POST['for_responsavel']."','".$_POST['for_email']."','".$_POST['for_cnpj']."','".$_POST['for_cep']."')";
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
		   	$sql = "select * from tbl_fornecedor where FOR_CODIGO = ".$_REQUEST['codigo'];
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
	   }
   	   function gravar_alterar()
	   {
		   	$sql = "update tbl_fornecedor  set  CID_CODIGO =".$_POST['cid_codigo'].", FOR_RAZAOSOCIAL = '".$_POST['for_razaosocial']."', FOR_NOME_FANTASIA = '".$_POST['for_nome_fantasia']."', FOR_ENDERECO = '".$_POST['for_endereco']."', FOR_BAIRRO = '".$_POST['for_bairro']."', FOR_FONE ='".$_POST['for_fone']."', FOR_RESPONSAVEL = '".$_POST['for_responsavel']."', FOR_EMAIL = '".$_POST['for_email']."', FOR_CNPJ = '".$_POST['for_cnpj']."', FOR_CEP = '".$_POST['for_cep']."' where FOR_CODIGO = ".$_POST['codigo'];
        	$this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function total_registros()
	   {
		   	$sql = "select count(*) as TOTAL from tbl_fornecedor";
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
		    return $this->registros->TOTAL;
	   }
	   
	   function listar_cidades()
	   {
		      $retorna = '';   
			  $sql = "select * from tbl_cidade order by CID_DESCRICAO";
			  $resultado = $this->con->banco->Execute($sql); 	
			  while($regcid = $resultado->FetchNextObject())
			  {
				  $selecionado = '';
				  if($this->registros->CID_CODIGO == $regcid->CID_CODIGO)
				  {
					  $selecionado = 'selected';
				  }
		          $retorna = $retorna . '<option value="'.$regcid->CID_CODIGO.'"'.$selecionado.'>'.$regcid->CID_DESCRICAO.'</option>'; 
			  
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