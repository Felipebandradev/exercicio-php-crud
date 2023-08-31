<?php

require_once "conecta.php";

function ler_alunos(PDO $conexao) : array {
    $sql = "SELECT *, ROUND((primeira + segunda)/2,2) as media FROM alunos ORDER BY nome" ;

    try{
        $query = $conexao->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    }catch (Exception $erro) {
        die("Erro ao Exibir: ".$erro->getMessage());
    }

    return $resultado;
}

function inserir_alunos(PDO $conexao, string $nome, float $primeira, float $segunda):void{
    $sql = "INSERT INTO alunos(nome, primeira, segunda) VALUES(:nome, :primeira, :segunda)";

    try {
        $query = $conexao->prepare($sql);
        $query->bindValue(":nome",$nome,PDO::PARAM_STR);
        $query->bindValue(":primeira",$primeira,PDO::PARAM_STR);
        $query->bindValue(":segunda",$segunda,PDO::PARAM_STR);
        $query->execute();
    } catch (Exception $erro) {
        die("Erro ao Cadastrar: ".$erro->getMessage());
    }
};