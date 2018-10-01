

<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="img/skate.png">
	<title>Pagina Inicial</title>
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


			    <li class="nav-item active btn-info">
			       <a class="nav-link" href="index.php">Página Inicial<span class="sr-only">(current)</span></a>
			    </li>
			    
			    
			    <li class="nav-item active ">
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



	<br/>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Kaos Skate</h1>
				<a href="visualizarProdutos.php"><img src="img/manobra.jpg" class="img-fluid" alt="Uma manobra de skate, Ollie"></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>	
			
		</div>
		
	</div>

</body>
</html>