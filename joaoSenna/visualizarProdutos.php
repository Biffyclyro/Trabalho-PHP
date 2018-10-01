<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="img/skate.png">
	<title>Produtos</title>
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
			       <a class="nav-link" href="index.php">Página Inicial<span class="sr-only">(current)</span></a>
			    </li>
			    
			    
			    <li class="nav-item active btn-info">
			        <a class="nav-link" href="visualizarProdutos.php">Vizualizar Produtos</a>
			    </li>
			    <li class="nav-item active  ">
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
				<table class="table table-striped table-dark">
				  <thead>
				    <tr>
				      <th scope="col">Codigo Shape</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Tamanho</th>
				      
				    </tr>
				  	</thead>
				  	<tbody>
				   		<?php 			
				   			include 'crudSkate.php';
				   			$resultado = consultaShape();
				   			 if($resultado){
				   			 	while($line=mysqli_fetch_assoc($resultado)){
				   			 		$cod=$line['cod_shape'];
				   			 		$nome=$line['nome'];
				   			 		$tam=$line['tamanho'];

				   			 		echo"
				   			 			<tr>
					                        <td>$cod</td>
					                        <td>$nome</td>
					                        <td>$tam</td>
					                        <td>
					                          <a class='btn btn-primary' href='editarProduto.php'>Editar</a>
					                        </td>
					                    </tr>
					                    ";

				   			 	}
				   			 }

				   		 ?>
				  	</tbody>
				</table>
			</div>	
			
		</div>
		
	</div>

</body>
</html>