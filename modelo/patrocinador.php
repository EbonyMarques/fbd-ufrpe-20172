<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cod_patrocinador, $nome_patrocinador) {
        $conexao = conectar();
        $sql = "INSERT INTO patrocinador values ('$cod_patrocinador', '$nome_patrocinador')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM patrocinador";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function lerEspecifico($cod_patrocinador) {
        $conexao = conectar();
        $sql = "SELECT * FROM patrocinador WHERE cod_patrocinador='$cod_patrocinador'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($cod_patrocinador, $nome_patrocinador) {
        $conexao = conectar();
        $sql = "UPDATE patrocinador SET nome_patrocinador='$nome_patrocinador' WHERE cod_patrocinador='$cod_patrocinador'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($cod_patrocinador) {
        $conexao = conectar();
        $sql = "DELETE FROM patrocinador WHERE cod_patrocinador='$cod_patrocinador'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };