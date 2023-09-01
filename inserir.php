<?php
require_once "src/funcoes-alunos.php";
require_once "teste.php";
if(isset($_POST['cadastrar'])){

	$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
	
	$primeira = filter_input(
		INPUT_POST,"primeira",
		FILTER_SANITIZE_NUMBER_FLOAT,
		FILTER_FLAG_ALLOW_FRACTION
    );
	
	$segunda = filter_input(
		INPUT_POST,"segunda",
		FILTER_SANITIZE_NUMBER_FLOAT,
		FILTER_FLAG_ALLOW_FRACTION
    );

	inserir_alunos($conexao, $nome, $primeira, $segunda);

	header("location:visualizar.php");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.scss">
<link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

	<form action="#" method="post"  class="row g-3">

	    <div class="col-md-12">
			<p>
			<label for="nome" class="form-label">Nome:</label>
			<input type="text"  class="form-control" name="nome" id="nome" required>
				</p>
		</div>
        
      <div class="col-md-6">
		<p>
			<label for="primeira" class="form-label">Primeira nota:</label>
			<input type="number" id="primeira"  class="form-control" name="primeira" step="0.01" min="0.00" max="10.00" required>
		</p>
	  </div>
	    
	    <div class="col-md-6">
			<p>
			<label for="segunda" class="form-label">Segunda nota:</label>
			<input type="number" id="segunda"  class="form-control" name="segunda" step="0.01" min="0.00" max="10.00" required>
				</p>
		</div>
	    
      <button type="submit" name="cadastrar" class="btn botao">Cadastrar aluno</button>
	</form>

    <hr>
    <p><a class="btn botao" href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>