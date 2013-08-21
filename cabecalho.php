<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="100" height="100">
  <tr>
    <td height="144"><table width="100%" height="100%">
      <tr>
        <td width="2%" height="136">&nbsp;</td>
        <td width="34%"><img src="imagens/logoBudegaOnline.png" width="286" height="102" /></td>
        <td width="62%"><table width="100%">
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td width="72%">&nbsp;</td>
            <td width="28%"><img src="imagens/im_areaadmin.png" width="132" height="25" /></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td colspan="2"><table width="100%">
              <tr>
                <td width="27%">
				<b>Login:</b>				</td>
                <td width="67%">
				  <span class="style4"><b> Data: </b>
				  <?php
				$semana = date("w"); 
				$dia = date("j");
				$mês = date("n");
				$ano = date("Y");
				$meses = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
				$semanas = array("Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado");
				echo "$semanas[$semana], $dia de $meses[$mês] de $ano";
				?>	
				- <b> Hora: </b>			
				<?php
				echo date ("H:i");
				?>
				- <b> IP: </b>
				<?php
				echo getenv ("REMOTE_ADDR");
				?>				
				  </span></td>
                <td width="6%">&nbsp;</td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
        </table></td>
        <td width="2%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="29"><table width="100%">
        <tr>
          <td width="2%" height="21">&nbsp;</td>
          <td width="96%"><img src="imagens/menu1.png" width="800" height="25" /></td>
          <td width="2%">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>

</body>
</html>
