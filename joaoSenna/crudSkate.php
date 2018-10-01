<?php 
	
	include 'conexaoBD.php';
	

	function cadastraShape($nome, $tamanho){
		conectar();
		query("INSERT INTO SHAPE(nome, tamanho) VALUES ('$nome', $tamanho)");
		fechar();
	}

	function excluiShape($code){
		conectar();
		query("DELETE FROM SHAPE WHERE COD_SHAPE = $code");
		fechar();

	}

	function consultaShape(){
		conectar();
		$result = query("SELECT * FROM SHAPE");
		fechar();
		return $result;
	}

	function alterar($code, $nome, $tamanho){
		conectar();
		query("UPDATE SHAPE SET NOME='$nome', TAMANHO=$tamanho WHERE COD_SHAPE=$code");
		fechar();
	}



?>