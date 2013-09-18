<body>
<form  name="form_cadastro" method="post" action="index.php" onSubmit="return verifica_fornecedor(this)">
  <div align="center">
    <table width="550" border="1" cellpadding="5" cellspacing="5" class="borda_tabela">
      <tr>
        <td colspan="2"><div align="center">
          <h1 class="titulos_lista_pesquisa">Manutencao de produtos</h1>
        </div></td>
      </tr>
      <tr>
        <td>Descricao</td>
        <td><label>
          <input name="prod_descricao" type="text" id="prod_descricao"  value="<?php echo @$oquefazer->registros->PROD_DESCRICAO;?>" size="50" />
        </label></td>
      </tr>
      <tr>
        <td width="99">Valor</td>
        <td width="360"><label>
          <input name="prod_valor" type="text" id="prod_valor" size="15" 
          value="<?php echo @$oquefazer->registros->PROD_VALOR;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Quantidade</td>
        <td><label>
          <input name="prod_quantidade" type="text" id="prod_quantidade" size="15"
          value="<?php echo @$oquefazer->registros->PROD_QUANTIDADE;?>" />
        </label></td>
      </tr>
      <tr>
        <td>Categoria</td>
        <td><select name="cat_codigo" id="cat_codigo">
          <option>Selecione uma categoria</option>
          <?php echo $oquefazer->listar_categorias();?>
        </select></td>
      </tr>
      <tr>
        <td>Fornecedor</td>
        <td><select name="for_codigo" id="for_codigo">
          <option>Selecione um fornecedor</option>
          <?php echo $oquefazer->listar_fornecedores();?>
        </select></td>
      </tr>
      <tr>
        <td>Tipo</td>
        <td><label>
          <select name="prod_tipo" id="prod_tipo">
          <?php
		     $tipo1 = '';
		     $tipo2 = '';
		 
		    switch(@$oquefazer->registros->PROD_TIPO)
			{
				case 'lata' : $tipo1 = 'selected';break;
				case 'garrafa'   : $tipo2 = 'selected';break;
			
				
			}
            ?>
            <option>selecione um tipo</option>
            <option value="lata"  <?php echo $tipo1;?>>lata</option>
            <option value="garrafa"    <?php echo $tipo2;?>>garrafa</option>

          </select>
        </label></td>
      </tr>
      <tr>
        <td>Observacao</td>
        <td><label>
          <textarea name="prod_obs" cols="50" rows="5" id="prod_obs"><?php echo @$oquefazer->registros->PROD_OBS;?></textarea>
        </label></td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="titulos_lista_pesquisa"><label>
          <input type="submit" name="button" id="button" value="Salvar" />
          <input type="reset" name="button2" id="button2" value="Limpar" />
          <input type="button" name="button3" id="button3" value="Cancelar" />
        </label>
        <input type="hidden" name="tabela" value="produto" />
        <input type="hidden" name="acao" value="<?php echo 'gravar_'.$acao?>"/>        
        <input type="hidden" name="codigo" value="<?php echo @$oquefazer->registros->PROD_CODIGO;?>" />                
        </td>
      </tr>
      <tr>
        <td colspan="2" class="titulos_lista_pesquisa">&nbsp;</td>
      </tr>
    </table>
  </div>
</form>
</body>