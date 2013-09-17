<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="646" align="center">
  <tr>
    <td width="135"><img src="../imagens/LOGObudega.png" width="125" height="47" /></td>
    <td width="499"><div align="center">Administra&ccedil;&atilde;o Loja Virtual Budega Online </div></td>
  </tr>
  <tr>
    <td align="left" valign="top"><ul>
      <li><a href="index.php">Home</a></li>
      <li>Categoria</li>
      <li><a href="index.php?tabela=cidade">Cidade</a></li>
      <li>Clientes</li>
      <li>Fornecedor</li>
      <li>Pedidos</li>
      <li>Produtos</li>
      <li>Promo&ccedil;&atilde;o</li>
    </ul></td>
    <td align="center" valign="top">
	<?php
			//$tabela = $_REQUEST['tabela'];
			
			if (isset($_REQUEST['tabela']))
   				$tabela = $_REQUEST['tabela'];
			else
			   $tabela = null;
			
			if($tabela == "cidade")
				require('cidade_lista.php');
			else
				require('principal.php');
	
	?>
	</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Loja Virtual - Budega Online </div></td>
  </tr>
</table>
</body>
</html>
