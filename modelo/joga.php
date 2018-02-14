<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cpf_jogador, $nome, $posicao, $data_inicio, $data_fim) {
        $conexao = conectar();
        $sql = "INSERT INTO joga values ('$cpf_jogador', '$nome', '$posicao', '$data_inicio', '$data_fim')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM joga";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;
    };

    function lerEspecifico($cpf_jogador, $nome) {
        $conexao = conectar();
        $sql = "SELECT * FROM joga WHERE cpf_jogador='$cpf_jogador' AND nome='$nome'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($cpf_jogador, $nome, $posicao, $data_inicio, $data_fim) {
        $conexao = conectar();
        $sql = "UPDATE joga SET posicao='$posicao', data_inicio='$data_inicio', data_fim='$data_fim' WHERE cpf_jogador='$cpf_jogador'AND nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($cpf_jogador,$nome) {
        $conexao = conectar();
        $sql = "DELETE FROM joga WHERE cpf_jogador='$cpf_jogador' AND nome='$nome' ";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };