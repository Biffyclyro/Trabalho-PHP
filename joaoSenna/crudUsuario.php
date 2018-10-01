<?php 
	include 'conexaoBD.php';

	function busca($usuario){
		conectar();
		$result = query("SELECT * FROM USUARIO WHERE USUARIO.NOME = '$usuario'");
		fechar();
		return $result;

	}

	function insere($usuario, $senha){
		conectar();
		query("INSERT INTO USUARIO(nome, senha) VALUES('$usuario', '$senha') ");
		fechar();
	}




?>