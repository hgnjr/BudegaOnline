<?php

    require('adodb/adodb.inc.php'); //biblioteca necessaria para trabalhar com adodb
	require('funcoes.php');
	
	class conexao
	{
	      var $tipo_banco    = "mysql";
		  var $servidor      = "localhost";
		  var $usuario       = "root";
		  var $senha         = "";
		  var $banco;       
	    
	      function conexao() //metodo construtor
		  {
                $this->banco = NewADOConnection($this->tipo_banco);
				$this->banco->dialect = 3;
				$this->banco->debug = false;
				$this->banco->Connect($this->servidor,$this->usuario,$this->senha,"budegaonline");
		  }
	}

    $con = new conexao();	
	
	//mysql_select_db("budegaonline");
	
	
	//if($con)
	 // echo "conectou";
	//else
	  //echo "nao conectou";

	
?>