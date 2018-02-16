<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cod_patrocinador, $nome_patrocinador) {
        $conexao = conectar();
        $sql = "INSERT INTO patrocinador values ('$cod_patrocinador', '$nome_patrocinador')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM patrocinador";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
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
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function excluir($cod_patrocinador) {
        $conexao = conectar();
        $sql = "DELETE FROM patrocinador WHERE cod_patrocinador='$cod_patrocinador'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
