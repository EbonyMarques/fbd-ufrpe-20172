<?php
    require "..\infraestrutura\auxiliar.php";

    function cadastrar($cpf, $nome) {
        $conexao = conectar();
        $sql = "INSERT INTO jogador values ('$cpf', '$nome')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM jogador";
        $resultado = mysqli_query($conexao, $sql);
        desconectar();

        return $resultado;

    };

    function atualizar($cpf, $nome) {
        $conexao = conectar();
        $sql = "UPDATE jogador SET nome='$nome' WHERE cpf='$cpf'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($cpf) {
        $conexao = conectar();
        $sql = "DELETE FROM jogador WHERE cpf='$cpf'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };

