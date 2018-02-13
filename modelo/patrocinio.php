<?php
    require "..\infraestrutura\auxiliar.php";

    function cadastrar($cod_patrocinador, $nome) {
        $conexao = conectar();
        $sql = "INSERT INTO patrocinio values ('$cod_patrocinador', '$nome')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM patrocinio";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function excluir($cod_patrocinador,$nome) {
        $conexao = conectar();
        $sql = "DELETE FROM patrocinio WHERE cod_patrocinador='$cod_patrocinador' AND nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };