<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($nome_time_casa, $nome_time_fora, $placar, $local, $data, $rg_arbitro) {
        $conexao = conectar();
        $sql = "INSERT INTO partida values ('$nome_time_casa', '$nome_time_fora', '$placar', '$local', '$data', '$rg_arbitro')";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de cadastro!");
        desconectar($conexao);

        return true;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM partida";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        return $resultado;

    };

    function lerEspecifico($nome_time_casa, $nome_time_fora) {
        $conexao = conectar();
        $sql = "SELECT * FROM partida WHERE nome_time_casa='$nome_time_casa' AND nome_time_fora='$nome_time_fora'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($nome_time_casa, $nome_time_fora, $placar, $local, $data, $rg_arbitro) {
        $conexao = conectar();
        $sql = "UPDATE partida SET placar='$placar', local='$local', data='$data', rg_arbitro='$rg_arbitro' WHERE nome_time_casa='$nome_time_casa' AND nome_time_fora='$nome_time_fora'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de atualização!");
        desconectar($conexao);

        return true;
    }

    function excluir($nome_time_casa, $nome_time_fora) {
        $conexao = conectar();
        $sql = "DELETE FROM partida WHERE nome_time_casa='$nome_time_casa' AND nome_time_fora='$nome_time_fora'";
        $execucao = mysqli_query($conexao, $sql) or die("Erro de exclusão!");
        desconectar($conexao);

        return true;
    };