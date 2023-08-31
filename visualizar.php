<?php
require_once "src/funcoes-alunos.php";

$ler_alunos = ler_alunos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.scss">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->

    <div class="container">
  <div class="row ">
    <?php foreach($ler_alunos as $alunos){ ?>
      <h1> <?=$alunos["nome"]?></h1>
                <p><b>Primeira Nota:</b> <?=$alunos["primeira"]?></p>
                <p><b>Segunda Nota:</b> <?=$alunos["segunda"]?></p>
                <p><b>Média: </b><?=$alunos["media"]?></p>
                <p><a href="#">Editar</a> <a href="">Excluir</a></p>
     <?php } ?>
    
      </div>
</div>

<!--     
    <div class="col-md-6 col-lg-4 column">
      <div class="card gr-3">
        <div class="txt">
          <h1>UX/UI WEBsite </br>AND MOBILE app</h1>
          <p>User Interface and User Experience Design.</p>
        </div>
        <a href="#">more</a>
      <div class="ico-card">
        <i class="fa fa-empire"></i>
      </div>
      </div>
    </div> -->
    

    

<p><a href="index.php">Voltar ao início</a></p>
  
</div>

</body>
</html>