<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/jogador.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "cpf" => $_POST["cpf"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "cpf" => $_POST["cpf"],
                "nome" => $_POST["nome"]
            );

            if ($_POST["acao"]=="cadastrar"){
                cadastro($dados);
            }

            if ($_POST["acao"]=="atualizar"){
                atualizacao($dados);
            }
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

    function verificacao($cpf) {
        $resultado = lerEspecifico($cpf);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor) {
        $permissao = cadastrar($valor['cpf'],$valor['nome']);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirJogador.php');
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor['cpf'],$valor['nome']);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirJogador.php');
    }

    function exclusao($valor) {
        $permissao = excluir($valor["cpf"]);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirJogador.php');
    }
?>
