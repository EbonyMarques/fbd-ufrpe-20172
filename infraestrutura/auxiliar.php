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

    function corrigeNulo($str) {
        return ($str) ? $str : '—';
    }

    function desmascarar($valor, $tipo) {
        switch ($tipo) {
            case 'cpf':
                $retorno = str_replace('.', '', $valor);
                $retorno = str_replace('-', '', $retorno);
                break;
            case 'rg':
                $retorno = str_replace('.', '', $valor);
                break;
        }
        return $retorno;
    }

    function mascarar($valor, $tipo) {
        switch ($tipo) {
            case 'cpf':
                $retorno = substr($valor, 0, 3).'.'.substr($valor, 3, 3).'.'.substr($valor, 6, 3).'-'.substr($valor, 9, 2);
                break;
            case 'rg':
                $retorno = $valor[0].'.'.substr($valor, 1, 3).'.'.substr($valor, 4, 3);
                break;
        }
        return $retorno;
    }
