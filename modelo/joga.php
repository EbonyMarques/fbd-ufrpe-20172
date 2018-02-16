<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cpf_jogador, $nome, $posicao, $data_inicio, $data_fim) {
        $conexao = conectar();
        $sql = "INSERT INTO joga values ('$cpf_jogador', '$nome', '$posicao', '$data_inicio', '$data_fim')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM joga";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
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

    function lerJogadores() {
        $conexao = conectar();
        $sql = "SELECT cpf FROM jogador";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
    };

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
    };

    function atualizar($cpf_jogador, $nome, $posicao, $data_inicio, $data_fim) {
        $conexao = conectar();
        $sql = "UPDATE joga SET posicao='$posicao', data_inicio='$data_inicio', data_fim='$data_fim' WHERE cpf_jogador='$cpf_jogador'AND nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($cpf_jogador,$nome) {
        $conexao = conectar();
        $sql = "DELETE FROM joga WHERE cpf_jogador='$cpf_jogador' AND nome='$nome' ";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
