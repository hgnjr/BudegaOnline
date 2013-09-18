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
          <h1 class="titulos_lista_pesquisa">Manutencao de Usuario</h1>
        </div></td>
      </tr>
      <tr>
        <td width="99">Nome</td>
        <td width="360"><label>
          <input name="usu_nome" type="text" id="usu_nome" size="40" 
          value="<?php echo @$oquefazer->registros->USU_NOME;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Login</td>
        <td><label>
          <input name="usu_login" type="text" id="usu_login" size="15"
          value="<?php echo @$oquefazer->registros->USU_LOGIN;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Senha</td>
        <td><label>
          <input name="usu_senha" type="password" id="usu_senha" size="15"
          value="<?php echo @$oquefazer->registros->USU_SENHA;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Nivel</td>
        <td><label>
          <select name="usu_nivel" id="usu_nivel">
         <?php
		       $usu1 = '';
		       $usu2 = '';
			   switch(@$oquefazer->registros->USU_NIVEL)
			   {
				   case 'A': $usu1 = 'selected';break; 
				   case 'L': $usu2 = 'selected';break;
			   }
		  ?>
            <option value="A" <?php echo $usu1;?>>Administrador</option>
            <option value="L" <?php echo $usu2;?>>Leitura</option>

</select>
        </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="titulos_lista_pesquisa"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="usuario" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
        <input type="hidden" name="codigo" value="<?php echo @$oquefazer->registros->USU_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">&nbsp;</td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>