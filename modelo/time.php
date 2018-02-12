<?php
    require "..\infraestrutura\auxiliar.php";

    function cadastrar($nome, $tipo) {
        $conexao = conectar();
        $sql = "INSERT INTO time values ('$nome', '$tipo')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM time";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function atualizar($nome, $tipo, $cod_uniforme) {
        $conexao = conectar();
        $sql = "UPDATE time SET tipo='$tipo', cod_uniforme='$cod_uniforme' WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($nome) {
        $conexao = conectar();
        $sql = "DELETE FROM time WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };

