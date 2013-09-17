<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="500" border="1">
  <tr>
    <td colspan="4" align="center">Lista de Cidades </td>
  </tr>
  <tr>
    <td align="center">Descri&ccedil;&atilde;o</td>
    <td align="center">UF</td>
    <td colspan="2" align="center"><a href="index.php?tabela=cidade&acao=incluir">Novo Registro</a> </td>
  </tr>
  <?php

	
	//$sql = "select * from tbl_cidade";
	
	//$resultado = $con->banco->Execute($sql); 
	
	//while(!$resultado->EOF)
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	
	{
	    //echo "cidade = " . $resultado->Fields('CID_DESCRICAO')."<br>";	

	/*<td><?php echo $resultado->Fields('CID_DESCRICAO');?></td>
    <td><?php echo $resultado->Fields('CID_UF');?></td>*/
?>
  <tr>
    <td><?php echo $oquefazer->registros->CID_DESCRICAO;?>
	<td><?php echo $oquefazer->registros->CID_UF;?></td>
    <td align="center"><a href="index.php?tabela=cidade&acao=alterar&codigo=<?php echo $oquefazer->registros->CID_CODIGO;?>">Alterar</a></td>
    <td align="center"><a href="index.php?tabela=cidade&acao=excluir&codigo=<?php echo $oquefazer->registros->CID_CODIGO;?>">Excluir</a></td>
  </tr>
  
  <?php 
  
  } ?>
  <tr>
    <td colspan="4" align="center">Budega Online </td>
  </tr>
  
</table>
</body>
</html>
