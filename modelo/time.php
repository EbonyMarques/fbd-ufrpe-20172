<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura\auxiliar.php";

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
    function lerEspecifico($nome) {
        $conexao = conectar();
        $sql = "SELECT * FROM time WHERE nome='$nome'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($nome, $tipo) {
        $conexao = conectar();
        $sql = "UPDATE time SET tipo='$tipo' WHERE nome='$nome'";
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

