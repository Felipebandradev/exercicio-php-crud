<?php

require_once "src/funcoes-alunos.php";

$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

excluir_aluno($conexao, $id);

header("location:visualizar.php");