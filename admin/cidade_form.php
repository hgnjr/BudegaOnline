<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../util/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form_cadastro" method="post" action="index.php">
  <div align="center">
    <table width="550" border="1" cellpadding="5" cellspacing="5" class="borda_tabela">
      <tr>
        <td colspan="2"><div align="center">
          <h1 class="titulos_lista_pesquisa">Manutencao de Cidades</h1>
        </div></td>
      </tr>
      <tr>
        <td width="99">Nome</td>
        <td width="360"><label>
          <input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="40" 
          value="<?php echo @$oquefazer->registros->CID_DESCRICAO;?>" />
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
			   switch(@$oquefazer->registros->CID_UF)
			   {
				   case 'SC': $estado1 = 'selected';break; 
				   case 'PR': $estado2 = 'selected';break;
				   case 'RS': $estado3 = 'selected';break; 
				   case 'TO': $estado4 = 'selected';break; 
				   case 'SP': $estado5 = 'selected';break; 
				   case 'RJ': $estado6 = 'selected';break; 				   
			   }
		  ?>
            <option value="SC" <?php echo $estado1;?>>SC</option>
            <option value="PR" <?php echo $estado2;?>>PR</option>
            <option value="RS" <?php echo $estado3;?>>RS</option>
            <option value="TO" <?php echo $estado4;?>>TO</option>
            <option value="SP" <?php echo $estado5;?>>SP</option>
            <option value="RJ" <?php echo $estado6;?>>RJ</option>
          </select>
        </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="titulos_lista_pesquisa"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="cidade" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
        <input type="hidden" name="codigo" value="<?php echo @$oquefazer->registros->CID_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">Rodape</td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>