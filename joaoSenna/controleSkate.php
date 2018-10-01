<?php 
	include 'crudSkate.php';

	if(isset($_POST["opcao"])){
		$opcao=$_POST["opcao"];

		if($opcao=="Cadastrar"){
			
			if($_POST["nome"]!=''){
				if ($_POST["tamanho"]!='') {
					conectar();
					cadastraShape($_POST["nome"], $_POST["tamanho"]);
					header("Location: visualizarProdutos.php");
				}else{
					header("Location: cadastrarProduto.php");
				}
			}else{
				header("Location: cadastrarProduto.php");
			}
			
		}else if($opcao=="Alterar"){
			conectar();
			alterar($_POST["code"], $_POST["nome"], $_POST["tamanho"]);
			header("Location: visualizarProdutos.php");

		}else if($opcao=="Excluir"){
			conectar();
			excluiShape($_POST["code"]);
			header("Location: visualizarProdutos.php");
		}else if($opcao=="Cancelar"){
			header("Location: visualizarProdutos.php");
		}

	}	




?>