<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura\auxiliar.php";

    function cadastrar($cod_uniforme, $descricao, $cod_cor, $tipo_titular_reserva, $nome) {
        $conexao = conectar();
        $sql = "INSERT INTO uniforme values ('$cod_uniforme', '$descricao', '$cod_cor', '$tipo_titular_reserva', '$nome')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM uniforme";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
    };

    function lerEspecifico($cod_uniforme) {
        $conexao = conectar();
        $sql = "SELECT * FROM uniforme WHERE cod_uniforme='$cod_uniforme'";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $array = [];

        while($elemento = mysqli_fetch_array($resultado)) {
            $array = $elemento;
        }

        return $array;
    }

    function atualizar($cod_uniforme, $descricao, $cod_cor, $tipo_titular_reserva, $nome) {
        $conexao = conectar();
        $sql = "UPDATE uniforme SET descricao='$descricao', cod_cor='$cod_cor', tipo_titular_reserva = '$tipo_titular_reserva', nome='$nome' WHERE cod_uniforme='$cod_uniforme'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($cod_uniforme) {
        $conexao = conectar();
        $sql = "DELETE FROM uniforme WHERE cod_uniforme='$cod_uniforme'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
