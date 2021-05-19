<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios;");

echo json_encode($usuarios);*/


//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


//lista os usuários

//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//Carrega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("joao","123321");
//echo $usuario;


//Inserir usuario novo

//$aluno = new Usuario("aluno2", "oluna2");
//$aluno->insert();
//echo $aluno;


//update na tabela
//$usuario = new Usuario();
//$usuario->loadbyId(6);
//$usuario->update("professor","teacher");
//echo $usuario;


//delete

$usuario = new Usuario();
$usuario->loadbyId(6);
$usuario->delete();

 ?>