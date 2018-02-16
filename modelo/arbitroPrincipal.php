<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($rg_arbitro, $nome, $tipo_habilitacao) {
        $conexao = conectar();
        $sql = "INSERT INTO arbitro_principal values ('$rg_arbitro', '$nome', '$tipo_habilitacao')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM arbitro_principal";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
    };

    function lerEspecifico($rg_arbitro) {
        $conexao = conectar();
        $sql = "SELECT * FROM arbitro_principal WHERE rg_arbitro='$rg_arbitro'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }


function atualizar($rg_arbitro, $nome, $tipo_habilitacao) {
        $conexao = conectar();
        $sql = "UPDATE arbitro_principal SET nome='$nome', tipo_habilitacao='$tipo_habilitacao' WHERE rg_arbitro='$rg_arbitro'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($rg_arbitro) {
        $conexao = conectar();
        $sql = "DELETE FROM arbitro_principal WHERE rg_arbitro='$rg_arbitro'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
