<?php
    session_start();
    $_SESSION['alertaTipo'] = (isset($_SESSION['alertaTipo'])) ? $_SESSION['alertaTipo'] : '';
    $_SESSION['alertaMensagem'] = (isset($_SESSION['alertaMensagem'])) ? $_SESSION['alertaMensagem'] : '';

    function conectar() {
        $conexao = mysqli_connect("localhost", "root", "", "fbd");
        mysqli_set_charset($conexao, 'utf8') or die (mysqli_error($conexao));
        return $conexao;
    }

    function desconectar($conexao) {
        mysqli_close($conexao);
    }
