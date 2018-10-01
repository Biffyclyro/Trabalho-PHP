<?php 
	include 'crudUsuario.php';

	if(isset($_POST["opcao"])){
		$opcao=$_POST["opcao"];
		if($opcao == "Cadastrar"){
			$nome=$_POST["nome"];
			$senha=sha1($_POST["senha"]);
			insere($nome, $senha);
			header("Location: index.php");
		}elseif($opcao == "Entrar"){
			$nome=$_POST["nome"];
			$senha= sha1($_POST["senha"]);
			$nomeBanco="null";
			$senhaBanco="null";
			$resultado = busca($nome);
			while($linha=mysqli_fetch_assoc($resultado)){
				$nomeBanco=$linha['nome'];
				$senhaBanco=$linha['senha'];
			}
			if($nome==$nomeBanco){
				if($senha==$senhaBanco){
					session_start();
					$_SESSION['nome']=$nomeBanco;
					header("Location: paginaInicial.php");
				}else{
					echo "<script>alert('Senha Incorreta!');</script>";
					echo "<script>window.location = 'index.php';</script>";
				}
			}else{
				echo "<script>alert('Nome Incorreto!');</script>";
				echo "<script>window.location = 'index.php';</script>";
			}
		}
	}elseif(isset($_GET["opcao"])){
		$opcao=$_GET["opcao"];
		if($opcao=='Sair'){
			session_start();
			session_destroy();
			header("Location: index.php");
		}	
	}
?>