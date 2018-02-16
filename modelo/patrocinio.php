<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/infraestrutura/auxiliar.php";

    function cadastrar($cod_patrocinador, $nome) {
        $conexao = conectar();
        $sql = "INSERT INTO patrocinio values ('$cod_patrocinador', '$nome')";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    }

    function ler() {
        $conexao = conectar();
        $sql = "SELECT * FROM patrocinio";
        $resultado = mysqli_query($conexao, $sql);
        desconectar($conexao);

        $arr = array(
            'dados' => $resultado,
            'total' => mysqli_num_rows($resultado)
        );

        return $arr;
    };

    function excluir($cod_patrocinador,$nome) {
        $conexao = conectar();
        $sql = "DELETE FROM patrocinio WHERE cod_patrocinador='$cod_patrocinador' AND nome='$nome'";
        $execucao = mysqli_query($conexao, $sql) or false;
        desconectar($conexao);

        return $execucao;
    };
