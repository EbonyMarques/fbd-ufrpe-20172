<?php
    session_start();
    function conectar() {
        $conexao = mysqli_connect("localhost", "root", "", "fbd");
        mysqli_set_charset($conexao, 'utf8') or die (mysqli_error($conexao));
        return $conexao;
    }

    function desconectar($conexao) {
        mysqli_close($conexao);
    }
