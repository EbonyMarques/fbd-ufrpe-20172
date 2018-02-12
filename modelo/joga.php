<?php
    require "..\infraestrutura\auxiliar.php";

    function cadastrar($cpf_jogador, $nome, $posicao, $data_inicio, $data_fim) {
        $conexao = conectar();
        $sql = "INSERT INTO joga values ('$cpf_jogador', '$nome', $posicao, $data_inicio, $data_fim)";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM joga";
        $resultado = mysqli_query($conexao, $sql);
        desconectar();

        return $resultado;
    };

    function atualizar($cpf_jogador, $nome, $posicao, $data_inicio, $data_fim) {
        $conexao = conectar();
        $sql = "UPDATE joga SET nome='$nome', posicao='$posicao', data_inicio='$data_inicio', data_fim='$data_fim' WHERE cpf='$cpf_jogador'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($cpf_jogador) {
        $conexao = conectar();
        $sql = "DELETE FROM joga WHERE cpf='$cpf_jogador'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };