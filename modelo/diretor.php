<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cod_diretor, $nome, $sobrenome) {
        $conexao = conectar();
        $sql = "INSERT INTO diretor values ('$cod_diretor', '$nome', '$sobrenome')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM diretor";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function lerEspecifico($cod_diretor) {
        $conexao = conectar();
        $sql = "SELECT * FROM diretor WHERE cod_diretor='$cod_diretor'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($cod_diretor, $nome, $sobrenome) {
        $conexao = conectar();
        $sql = "UPDATE diretor SET nome='$nome', sobrenome='$sobrenome' WHERE cod_diretor='$cod_diretor'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($cod_diretor) {
        $conexao = conectar();
        $sql = "DELETE FROM diretor WHERE cod_diretor='$cod_diretor'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };