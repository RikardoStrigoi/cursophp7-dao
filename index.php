<?php

require_once("config.php");

//Conexão db inicial
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//Conexão usando apenas classe Usuario - Carrega apenas um usuário:
/*$root = new Usuario();
$root->loadById(1);
echo $root;
*/

//Carrega uma lista de usuários:
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("ro");
echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha:
/*$usuario = new Usuario();
$usuario->login("joao", "123654");
echo $usuario;
*/

//Criando um novo usuário
/*$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario;

$usuario->loadById(8);

$usuario->update("professor", "qwerty");

echo $usuario;

?>