<?php
require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura\auxiliar.php";

function cadastrar($nome, $cidade_origem, $ano_criacao) {
    $conexao = conectar();
    $sql = "INSERT INTO time_amador values ('$nome', '$cidade_origem', '$ano_criacao')";
    $execucao = mysqli_query($conexao, $sql) or false;
    desconectar($conexao);

    return $execucao;
}

function ler() {
    $conexao = conectar();
    $sql = "SELECT * FROM time_amador";
    $resultado = mysqli_query($conexao, $sql);
    desconectar($conexao);

    $arr = array(
        'dados' => $resultado,
        'total' => mysqli_num_rows($resultado)
    );

    return $arr;
}

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

function lerTimes() {
    $conexao = conectar();
    $sql = "SELECT nome FROM time";
    $resultado = mysqli_query($conexao, $sql);
    desconectar($conexao);

    $arr = array(
        'dados' => $resultado,
        'total' => mysqli_num_rows($resultado)
    );

    return $arr;
}

function atualizar($nome, $cidade_origem, $ano_criacao) {
    $conexao = conectar();
    $sql = "UPDATE time_amador SET cidade_origem='$cidade_origem', ano_criacao='$ano_criacao' WHERE nome='$nome'";
    $execucao = mysqli_query($conexao, $sql) or false;
    desconectar($conexao);

    return $execucao;
}

function excluir($nome) {
    $conexao = conectar();
    $sql = "DELETE FROM time_amador WHERE nome='$nome'";
    $execucao = mysqli_query($conexao, $sql) or false;
    desconectar($conexao);

    return $execucao;
}
