<link href="../util/estilos.css" rel="stylesheet" type="text/css"/>

<table width="550" border="1px" class="borda_tabela" cellspacing="2">
  <tr class="titulos_lista_pesquisa">
    <td colspan="3" align="center"><h2 align="center"> Lista de Categoria</h2>
      <form id="form_pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=categoria&acao=listar">
        <label>
          Pesquisa.:
          <input name="pesquisa" type="text" id="pesquisa" size="50" />
        </label>
        <label>
          <input type="submit" name="button" id="button" value="Pesquisar" />
        </label>
      </form></td>
  </tr>
  <tr class="ordenacao_novo_registro">
    <td width="414"><a href="index.php?tabela=categoria&acao=listar&ordem=cat_descricao">Descri&ccedil;&atilde;o</td>
    <td colspan="2"><a href="index.php?tabela=categoria&acao=incluir">Novo Registro</a></td>
  </tr>
  <?php

	
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
    ?>
            <tr  onmouseover="muda_cor_over(this)" onmouseout="muda_cor_out(this)">
                <td  class="itens_tabela_banco"><?php echo $oquefazer->registros->CAT_DESCRICAO;?></td>
                <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="73"><a href="index.php?tabela=categoria&acao=alterar&codigo=<?php echo $oquefazer->registros->CAT_CODIGO;?>">Alterar</a></td>
               <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="104"><a href="javascript:if(confirm('Deseja excluir esse registro ?')) {location='index.php?tabela=categoria&acao=excluir&codigo=<?php echo $oquefazer->registros->CAT_CODIGO;?>';}">Excluir</a></td>
  </tr>
<?php 
	} ?>         
  <tr class="titulos_lista_pesquisa">
    <td colspan="3"><p align="center">Numero de registros: <?php echo $oquefazer->total_registros();?></p>
    </td>
  </tr>
</table>
