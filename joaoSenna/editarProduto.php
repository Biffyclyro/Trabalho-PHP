<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="img/skate.png">
	<title>Editar Produtos</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
		<a class="navbar-brand" href="index.php"><img src="img/skate.png" width="30" height="30" alt="ícone de skate">Kaos Skate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
		 <?php 
	
				session_start();
				if (isset($_SESSION['nome'])){
					$nome = $_SESSION['nome'];
				}else{
					header("Location: login.php");
				}
			?>
		   
		
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		    <ul class="navbar-nav ">


			    <li class="nav-item active ">
			       <a class="nav-link" href="index.php">Página Inicial</a>
			    </li>
			    
			    
			    <li class="nav-item active btn-info">
			        <a class="nav-link" href="visualizarProdutos.php">Vizualizar Produtos</a>
			    </li>
			    <li class="nav-item active ">
			        <a class="nav-link" href="cadastrarProduto.php">Cadastrar Produtos</a>
			    </li>
		        <li class="nav-item active user">
			    	<a class="nav-link" href="controleUsuario.php?opcao=Sair">Logout</a>
			    </li>
			    

			    
		    </ul>
		  </div>

	</nav>
	<div class="user">
		<p>Bem Vindo <?php   echo $nome; ?></p>
	</div>

		<section>

      <div class="container">
        <form method="post" action="controleSkate.php">

         <div class="form-group">
            <label for="code">Código do Shape:</label>
            <input type="numebr" class="form-control" id="code" name="code" placeholder="Entre com o Código">
            
          </div>


          <div class="form-group">
            <label for="nome">Novo Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Entre com o nome">
            
          </div>

         

          <div class="form-group">
            <label for="tamanho">Novo Tamanho:</label>
            <input type="number" class="form-control" id="tamanho" name="tamanho" placeholder="tamanho">
          </div>          
          <button type="submit" class="btn btn-primary" name="opcao" value="Alterar">Atualizar</button>
          <button type="submit" class="btn btn-danger" name="opcao" value="Excluir">Excluir</button>
          <button type="submit" class="btn btn-alert" name="opcao" value="Cancelar">Cancelar</button>
        </form>
      </div>

		
		
	</div>
	

</body>
</html>