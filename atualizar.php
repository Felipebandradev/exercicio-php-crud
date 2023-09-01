<?php
require_once "teste.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.scss">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Atualizar dados do aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

    <form action="#" method="post" class="row g-3">
        
	    <div class="col-md-12">
            <p><label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome"  class="form-control" id="nome" required></p>
        </div>
        
        <div class="col-md-6">
            <p><label for="primeira"  class="form-label">Primeira nota:</label>
                    <input name="primeira" type="number" id="primeira" class="form-control" step="0.01" min="0.00" max="10.00" required></p>
        </div>
	    
	    <div class="col-md-6">
            <p><label for="segunda">Segunda nota:</label>
            <input name="segunda" type="number" id="segunda"  class="form-control" step="0.01" min="0.00" max="10.00" required></p>
        </div>

        <div class="col-md-6">
            <p>
            <!-- Campo somente leitura e desabilitado para edição.
            Usado apenas para exibição do valor da média -->
                <label class="form-label" for="media">Média:</label>
                <input name="media" type="number" id="media"  class="form-control" step="0.01" min="0.00" max="10.00" readonly disabled>
            </p>
        </div>

        <div class="col-md-6">
        <p>
        <!-- Campo somente leitura e desabilitado para edição 
        Usado apenas para exibição do texto da situação -->
            <label for="situacao" class="form-label">Situação:</label>
	        <input type="text" name="situacao"  class="form-control" id="situacao" readonly disabled>
        </p>
        </div>
        <button name="atualizar-dados" class="btn botao">Atualizar dados do aluno</button>
	</form>    
    
    <hr>
    <p><a  class="btn botao" href="visualizar.php">Voltar à lista de alunos</a></p>

</div>


</body>
</html>