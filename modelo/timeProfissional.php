<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura\auxiliar.php";

    function cadastrar($nome, $cod_diretor) {
        $conexao = conectar();
        $sql = "INSERT INTO time_profissional values ('$nome', '$cod_diretor')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM time_profissional";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function lerEspecifico($nome) {
        $conexao = conectar();
        $sql = "SELECT * FROM time_profissional WHERE nome='$nome'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($nome, $cod_diretor) {
        $conexao = conectar();
        $sql = "UPDATE time_profissional SET cod_diretor='$cod_diretor' WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($nome) {
        $conexao = conectar();
        $sql = "DELETE FROM time_profissional WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };