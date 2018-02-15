<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cod_cor, $tonalidades_cores, $descricao) {
        $conexao = conectar();
        $sql = "INSERT INTO cor values ('$cod_cor', '$tonalidades_cores', '$descricao')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM cor";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function lerEspecifico($cod_cor) {
        $conexao = conectar();
        $sql = "SELECT * FROM cor WHERE cod_cor='$cod_cor'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }


    function atualizar($cod_cor, $tonalidades_cores, $descricao) {
        $conexao = conectar();
        $sql = "UPDATE cor SET tonalidades_cores='$tonalidades_cores', descricao='$descricao' WHERE cod_cor='$cod_cor'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($cod_cor) {
        $conexao = conectar();
        $sql = "DELETE FROM cor WHERE cod_cor='$cod_cor'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
