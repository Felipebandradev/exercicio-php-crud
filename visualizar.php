<?php
require_once "src/funcoes-alunos.php";

$ler_alunos = ler_alunos($conexao);

$quantidade = count($ler_alunos);

 $situacao = function (float $media) :string {
  if($media >= 7){ 
  $resultado = "Aprovado";
} elseif ( $media >= 5) { 
      $resultado = "Recuperaçao";
 } else {
   $resultado = "Reprovado";
 }
  return $resultado;
 } ;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.scss">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="contencao">
      <h1>Lista de alunos</h1>
      <hr>
      <h2>Quantidade de alunos cadastrados: <?=$quantidade?></h2>
      
      <p><a class="btn btn-primary" href="inserir.php">Inserir novo aluno</a></p>
      
         
         <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
      para exibir a relação de alunos existentes no banco de dados.
      
      Obs.: não se esqueça de criar também os links dinâmicos para
      as páginas de atualização e exclusão. -->
      
      <div class="container ">
        <div class="row">
      <?php foreach($ler_alunos as $alunos){ ?>
      
      <div class="col-md-6 col-lg-4 column">
        <div
         class="card
         <?php if($alunos['media'] >= 7){ ?>
              gr-2
         <?php } elseif ( $alunos['media'] >= 5) { ?>
          recuperacao
         <?php } else { ?>
              gr-3
         <?php } ?>
          "
         >
          <div class="txt">
            <h1> <?=$alunos["nome"]?></h1>
                  <p><b>Primeira Nota:</b> <?=$alunos["primeira"]?></p>
                  <p><b>Segunda Nota:</b> <?=$alunos["segunda"]?></p>
                <p><b>Média: </b><?=$alunos["media"]?></p>
                <p><b>Situação:</b> <?=$situacao($alunos["media"])?> </p>
          </div>
          <p><a class="btn" href="atualizar.php">Editar</a> <a class="btn excluir" href="excluir.php">Excluir</a></p>
        </div>
      </div>
      
       <?php } ?>
      
        </div>
      </div>         
        
      
      <p><a class="btn btn-primary" href="index.php">Voltar ao início</a></p>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>