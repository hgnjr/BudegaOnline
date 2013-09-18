<link href="../util/estilos.css" rel="stylesheet" type="text/css"/>

<table width="550" border="1px" class="borda_tabela" cellspacing="2">
  <tr class="titulos_lista_pesquisa">
    <td colspan="7" align="center"><h2 align="center"> Lista de produtos</h2>
      <form id="form_pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=produto&acao=listar">
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
    <td width="225"><a href="index.php?tabela=produto&acao=listar&ordem=PROD_DESCRICAO">Descricao</td>
    <td width="176"><a href="index.php?tabela=produto&acao=listar&ordem=PROD_VALOR">Valor</td>
    <td width="125">Quantidade</td>
    <td width="125">Categoria</td>
    <td colspan="3"><a href="index.php?tabela=produto&acao=incluir">Novo Registro</a></td>
  </tr>
  <?php

	
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
    ?>
            <tr onmouseover="muda_cor_over(this)" onmouseout="muda_cor_out(this)">
                <td  class="itens_tabela_banco"><?php echo $oquefazer->registros->PROD_DESCRICAO;?></td>
                <td class="itens_tabela_banco"><?php echo $oquefazer->registros->PROD_VALOR;?></td>
                <td class="itens_tabela_banco"><?php echo $oquefazer->registros->PROD_QUANTIDADE;?></td>
                <td class="itens_tabela_banco"><?php echo $oquefazer->registros->CAT_CODIGO;?></td>
                <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="49"><a href="index.php?tabela=imagem&amp;acao=listar&codigo=<?php echo $oquefazer->registros->PROD_CODIGO;?>">Imagem</a></td>
                <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="62"><a href="index.php?tabela=produto&acao=alterar&codigo=<?php echo $oquefazer->registros->PROD_CODIGO;?>">Alterar</a></td>
               <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="86"><a href="javascript:if(confirm('Deseja excluir esse registro ?')) {location='index.php?tabela=produto&acao=excluir&codigo=<?php echo $oquefazer->registros->PROD_CODIGO;?>';}">Excluir</a></td>
  </tr>
<?php 
	} ?>         
  <tr class="titulos_lista_pesquisa">
    <td colspan="7"><p align="center">Numero de registros: <?php echo $oquefazer->total_registros();?></p>
    </td>
  </tr>
</table>
