<?php
    require "..\infraestrutura\auxiliar.php";

    function cadastrar($cod_cor, $tonalidades_cores, $descricao) {
        $conexao = conectar();
        $sql = "INSERT INTO cor values ('$cod_cor', '$tonalidades_cores', '$descricao')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM cor";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function atualizar($cod_cor, $tonalidades_cores, $descricao) {
        $conexao = conectar();
        $sql = "UPDATE cor SET tonalidades_cores='$tonalidades_cores', descricao='$descricao' WHERE cod_cor='$cod_cor'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($cod_cor) {
        $conexao = conectar();
        $sql = "DELETE FROM cor WHERE cod_cor='$cod_cor'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };