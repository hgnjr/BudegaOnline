<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BudegaOnline</title>
<link href="../util/estilos.css" rel="stylesheet" type="text/css" />

      </head>
      
      <body>
      <table width="837" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td align="left" valign="top" class="titulo_sistema"><img src="../imagens/ImagensBudegaOnline.png" width="207" height="86" /><br />          </td>
          <td align="left" valign="top" class="titulo_sistema"><div align="right">Administra&ccedil;&atilde;o</div></td>
        </tr>
        <tr>
          <td width="109" align="left" valign="top"><p class="menu"><a href="index.php"  onmouseover="this.className='menu_over';" onmouseout="this.className='menu';">Home</a><br />
            <a href="index.php?tabela=categoria&acao=listar"  onmouseover="this.className='menu_over';" onmouseout="this.className='menu';">Categoria</a><br />
            <a href="index.php?tabela=cidade&acao=listar"  onmouseover="this.className='menu_over';" onmouseout="this.className='menu';">Cidade</a><br />
            Clientes
            <br />
            <a href="index.php?tabela=fornecedor&acao=listar" onmouseover="this.className='menu_over';" onmouseout="this.className='menu';">Fornecedor</a><br />
              Pedidos
              <br />
            <a href="index.php?tabela=produto&acao=listar" onmouseover="this.className='menu_over';" onmouseout="this.className='menu';">Produtos</a><br />
              Promocao<br />
              <a href="index.php?tabela=usuario&acao=listar" onmouseover="this.className='menu_over';" onmouseout="this.className='menu';">Usuario</a>
              <br />
              <a href="logoff.php">Saida</a><br />
          </p></td>
          <td width="693" align="center" valign="top">

<div align="left"></div>
<p>&nbsp;</p>
<?php
			require('../util/conecta.php');
			
						
			if (isset($_REQUEST['tabela']))
   				$tabela = $_REQUEST['tabela'];
			else
			   $tabela = null;
			   
			if (isset($_REQUEST['acao']))
   				$acao = $_REQUEST['acao'];
			else
  				$acao = null;
			
			if($tabela == "cidade")
				require('cidade_acao.php');
			if($tabela == "categoria")
				require('categoria_acao.php');
			else
				require('principal.php');
				
				
				
	
	?></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><span class="titulo_sistema">Loja Virtual - BudegaOnline </span></div></td>
  </tr>
</table>
</body>
</html>
