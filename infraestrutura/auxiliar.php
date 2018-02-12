<?php
    function conectar() {
        $conexao = mysqli_connect("localhost", "root", "", "fbd");
        return $conexao;
    }

    function desconectar($conexao) {
        mysqli_close($conexao);
    }