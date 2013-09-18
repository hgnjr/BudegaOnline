<?php
     //echo "categoria_manutencao<br>";
   class categoria_manutencao
   {
       var $resultado;
	   var $registros;
	   
	   function categoria_manutencao() //metodo construtor
	   {
             $this->con = new conexao();		   
	   }       
	   function listar_categoria()
	   {
		    @$ordenacao = $_REQUEST['ordem'];
			if ($ordenacao == '')
			   $ordenacao = "CAT_DESCRICAO";

		    @$filtro = $_REQUEST['pesquisa'];
			if ($filtro == '')
			    @$filtrar_por == '';
	 		else
			   $filtrar_por = $filtro;

			   
			@$sql = "select * from tbl_categoria where cat_descricao like '".$filtrar_por."%' order by ".$ordenacao;
            $this->resultado = $this->con->banco->Execute($sql);
	   }
	   
	   function excluir()	   
	   {

		   	$sql = "delete from tbl_categoria where cat_codigo = ".$_REQUEST['codigo'];
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
		   	$sql = "insert into tbl_categoria (cat_descricao) values ('".$_REQUEST['cat_descricao']."')";
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
		   	$sql = "select * from tbl_categoria where cat_codigo = ".$_REQUEST['codigo'];
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
	   }
   	   function gravar_alterar()
	   {
		   	$sql = "update tbl_categoria  set cat_descricao = '".$_REQUEST['cat_descricao']."' where cat_codigo = ".$_REQUEST['codigo'];
        	$this->resultado = $this->con->banco->Execute($sql); 	   
	   }
	   
	   function total_registros()
	   {
		   	$sql = "select count(*) as TOTAL from tbl_categoria";
            $this->resultado = $this->con->banco->Execute($sql); 
			$this->registros = $this->resultado->FetchNextObject(); //se posiciona no registro
		    return $this->registros->TOTAL;
	   }

	   
   }
?>