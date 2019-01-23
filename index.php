<?php

require_once("config.php");

//Conexão db inicial
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Conexão usando apenas classe Usuario:

$root = new Usuario();

$root->loadById(1);

echo $root;

?>