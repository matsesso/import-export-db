<?php
// infos
$mysqlHostName = 'localhost';
$mysqlDatabaseName = 'nome_da_database';
$mysqlUserName = 'nome_do_usuario';
$mysqlPassword = 'senha_do_usuario';
$mysqlExportPath = 'arquivo_exportado.sql';

// script
$comando='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ~/' .$mysqlExportPath;
exec($comando,$output=array(),$work);
switch($work){
	case 0:
		echo 'A database <b>' .$mysqlDatabaseName .'</b> foi exportada com sucesso para <b>~/' .$mysqlExportPath .'</b>';
		break;	
	case 1:
		echo 'Houve algum problema durante a exportação da <b>' .$mysqlDatabaseName .'</b> para <b>~/' .$mysqlExportPath .'</b>';
		break;
	case 2:
		echo 'Ocorreu um erro durante a exportação.<br>Por favor revise as informações:<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>********</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
		break;
}
?>