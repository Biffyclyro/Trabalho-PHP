



<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="img/skate.png">
	<title>Login</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
		<a class="navbar-brand" href="index.php"><img src="img/skate.png" width="30" height="30" alt="ícone de skate">Kaos Skate</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
		  
		   
		
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		    <ul class="navbar-nav ">
			    
			    <li class="nav-item active btn-info">
			        <a class="nav-link" href="login.php">Login</a>
			    </li>
			    <li class="nav-item active ">
			        <a class="nav-link" href="cadastro.php">Cadastro Usuário</a>
			    </li>
			    			    
		        
			    
		    </ul>
		  </div>

	</nav>

		<section>

      <div class="container">
        <form method="post" action="controleUsuario.php">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Entre com o nome">
            
          </div>
          <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
          </div>          
          <button type="submit" class="btn btn-primary" name="opcao" value="Entrar">Entrar</button>
        </form>
      </div>

			<article>
				<h2></h2>
				<p></p>
			</article>

			<article>
				<h2></h2>
				<p></p>
			</article>

			<article>
				<h2></h2>
				<p></p>
			</article>
		</section>

		<footer></footer>
		
	</div>
	<script></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/	DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>