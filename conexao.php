<?
$servidor = "loalhost";
$usuario = "root";
$senha = "";

$con = mysql_connect ($servidor,$usuario,$senha) or die ("Não foi possivel conectar ao servidor");
mysql_select_db ("budegaonline", $con) or die ("Não foi possivel conectar ao banco");

?>
