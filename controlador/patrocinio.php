<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/patrocinio.php";

    if(isset($_POST['acao'])) {
        $dados = array(
            "cod_patrocinador" => $_POST["cod_patrocinador"],
            "nome" => $_POST["nome"]
        );
        if ($_POST["acao"]=="excluir") {
            exclusao($dados);
        }
        if ($_POST["acao"]=="cadastrar"){
                cadastro($dados);
        }
    }

    function exibeDados(){
        $resultado = ler();

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }
    function cadastro($valor) {
        $permissao = cadastrar($valor["cod_patrocinador"], $valor["nome"]);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirPatrocinio.php');
    }
    function exclusao($valor) {
        $permissao = excluir($valor["cod_patrocinador"], $valor["nome"]);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirPatrocinio.php');
    }

?>
