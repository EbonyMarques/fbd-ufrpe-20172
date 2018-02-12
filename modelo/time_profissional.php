<?php
    require "..\infraestrutura\auxiliar.php";

    function cadastrar($nome, $cod_diretor) {
        $conexao = conectar();
        $sql = "INSERT INTO time_profissional values ('$nome', '$cod_diretor')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM time_profissional";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function atualizar($nome, $cod_diretor) {
        $conexao = conectar();
        $sql = "UPDATE time_profissional SET cod_diretor='$cod_diretor' WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($nome) {
        $conexao = conectar();
        $sql = "DELETE FROM time_profissional WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };