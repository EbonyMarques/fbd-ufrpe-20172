<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura\auxiliar.php";

    function cadastrar($nome, $tipo) {
        $conexao = conectar();
        $sql = "INSERT INTO time values ('$nome', '$tipo')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM time";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
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
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($nome) {
        $conexao = conectar();
        $sql = "DELETE FROM time WHERE nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
