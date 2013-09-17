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
            <h2>Manuten&ccedil;&atilde;o de Cidades </h2>
        </div></td>
      </tr>
      <tr>
        <td width="95">Nome</td>
        <td width="364"><label>
          <input name="CID_DESCRICAO" type="text" id="CID_DESCRICAO" size="40" />
        </label></td>
      </tr>
      <tr>
        <td>UF</td>
        <td><label>
          <select name="CID_UF" id="CID_UF">
            <option value="MA">MA</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="SP">SP</option>
            <option value="BA">BA</option>
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
        <input type="hidden" name="acao" value="gravar_incluir"/>        
                      
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
