<?php
require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura\auxiliar.php";

function cadastrar($nome, $cidade_origem, $ano_criacao) {
    $conexao = conectar();
    $sql = "INSERT INTO time_amador values ('$nome', '$cidade_origem', '$ano_criacao')";
    $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
    desconectar($conexao);

    return true;
}

function ler() {
    $conexao = conectar();
    $sql = "SELECT * FROM time_amador";
    $resultado = mysqli_query($conexao, $sql);
    desconectar($conexao);

    return $resultado;

};

function lerEspecifico($nome) {
    $conexao = conectar();
    $sql = "SELECT * FROM time_amador WHERE nome='$nome'";
    $resultado = mysqli_query($conexao, $sql);
    desconectar($conexao);

    $array = [];

    while($elemento = mysqli_fetch_array($resultado)) {
        $array = $elemento;
    }

    return $array;
}

function atualizar($nome, $cidade_origem, $ano_criacao) {
    $conexao = conectar();
    $sql = "UPDATE time_amador SET cidade_origem='$cidade_origem', ano_criacao='$ano_criacao' WHERE nome='$nome'";
    $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
    desconectar($conexao);

    return true;
}

function excluir($nome) {
    $conexao = conectar();
    $sql = "DELETE FROM time_amador WHERE nome='$nome'";
    $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
    desconectar($conexao);

    return true;
};