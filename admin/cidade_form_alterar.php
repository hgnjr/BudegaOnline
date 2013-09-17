<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form_cidade" method="post" action="index.php">
  <div align="center">
    <table width="500" border="1" cellspacing="5" cellpadding="5">
      <tr>
        <td colspan="2"><div align="center">
            <h2>Alterar Cidades </h2>
        </div></td>
      </tr>
      <tr>
        <td width="95">Nome</td>
        <td width="364"><label>
          <input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="40" value="<?php echo $oquefazer->registros->CID_DESCRICAO;?>"/>
        </label></td>
      </tr>
      <tr>
        <td>UF</td>
        <td><label>
          <select name="CID_UF" id="CID_UF">
		  <?php
		       $estado1 = '';
		       $estado2 = '';
		       $estado3 = '';
		       $estado4 = '';
		       $estado5 = '';	
   		       $estado6 = '';
			   switch($oquefazer->registros->CID_UF)
			   {
				   case 'MA': $estado1 = 'selected';break; 
				   case 'PI': $estado2 = 'selected';break;
				   case 'RJ': $estado3 = 'selected';break; 
				   case 'SP': $estado4 = 'selected';break; 
				   case 'BA': $estado5 = 'selected';break; 
			   }
		  ?>
		  
            <option value="MA" <?php echo $estado1;?>>MA</option>
            <option value="PI" <?php echo $estado2;?>>PI</option>
            <option value="RJ" <?php echo $estado3;?>>RJ</option>
            <option value="SP" <?php echo $estado4;?>>SP</option>
            <option value="BA" <?php echo $estado5;?>>BA</option>

          </select>
        </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><label>
          <input type="submit" name="Submit" value="Salvar" />
          <input type="submit" name="Submit2" value="Limpar" />
          <input type="submit" name="Submit3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="cidade" />
        <input type="hidden" name="acao" value="gravar_alterar"/>      
        <input type="hidden" name="codigo" value="<?php echo $oquefazer->registros->CID_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      </table>
  </div>
</form>
</body>
</html>