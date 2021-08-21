<?php
// infos
$mysqlHostName = 'localhost';
$mysqlDatabaseName = 'nome_da_database';
$mysqlUserName = 'nome_do_usuario';
$mysqlPassword = 'senha_do_usuario';
$mysqlImportFilename = 'arquivo_para_importar.sql';

// script
$comando='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($comando,$output=array(),$work);
switch($work){
	case 0:
		echo 'A importação do arquivo <b>' .$mysqlImportFilename .'</b> ocorreu com sucesso na database <b>' .$mysqlDatabaseName .'!</b>';
		break;
	case 1:
		echo 'Ocorreu um erro durante a importação do arquivo.<br>Por favor reveja as informações postadas por você e lembre-se que o arquvido à ser importado tem que estar na mesma pasta que este script!<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>********</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>MySQL Import Filename:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
		break;
}
?>