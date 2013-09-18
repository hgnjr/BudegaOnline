<link href="../util/estilos.css" rel="stylesheet" type="text/css"/>

<table width="550" border="1px" class="borda_tabela" cellspacing="2">
  <tr class="titulos_lista_pesquisa">
    <td colspan="5" align="center"><h2 align="center"> Lista de Fornecedores</h2>
      <form id="form_pesquisa" name="form_pesquisa" method="post" action="index.php?tabela=fornecedor&acao=listar">
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
    <td width="225"><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_RAZAOSOCIAL">Raz&atilde;o Social </td>
    <td width="176"><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_NOME_FANTASIA">Nome Fantasia</td>
    <td width="125"><a href="index.php?tabela=fornecedor&acao=listar&ordem=FOR_CNPJ">CNPJ</td>
    <td colspan="2"><a href="index.php?tabela=fornecedor&acao=incluir">Novo Registro</a></td>
  </tr>
  <?php

	
	while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
	{
    ?>
            <tr onmouseover="muda_cor_over(this)" onmouseout="muda_cor_out(this)">
                <td  class="itens_tabela_banco"><?php echo $oquefazer->registros->FOR_RAZAOSOCIAL;?></td>
                <td class="itens_tabela_banco"><?php echo $oquefazer->registros->FOR_NOME_FANTASIA;?></td>
                <td class="itens_tabela_banco"><?php echo $oquefazer->registros->FOR_CNPJ;?></td>
                <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="76"><a href="index.php?tabela=fornecedor&acao=alterar&codigo=<?php echo $oquefazer->registros->FOR_CODIGO;?>">Alterar</a></td>
               <td class="alterar_excluir" onMouseOver="this.className='alterar_excluir_over';"  onMouseOut="this.className='alterar_excluir';" width="84"><a href="javascript:if(confirm('Deseja excluir esse registro ?')) {location='index.php?tabela=fornecedor&acao=excluir&codigo=<?php echo $oquefazer->registros->FOR_CODIGO;?>';}">Excluir</a></td>
  </tr>
<?php 
	} ?>         
  <tr class="titulos_lista_pesquisa">
    <td colspan="5"><p align="center">Numero de registros: <?php echo $oquefazer->total_registros();?></p>
    </td>
  </tr>
</table>
