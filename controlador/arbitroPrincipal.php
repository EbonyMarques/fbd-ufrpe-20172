<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/arbitroPrincipal.php";

    if(isset($_POST["acao"])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "rg_arbitro" => $_POST["rg_arbitro"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "rg" => $_POST["rg"],
                "nome" => $_POST["nome"],
                "habilitacao" => $_POST["tipo_habilitacao"]);

            if ($_POST["acao"]=="cadastrar"){
                cadastro($dados);
            }

            elseif ($_POST["acao"]=="atualizar"){
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

    function verificacao($rg) {
        $resultado = lerEspecifico($rg);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor['rg'],$valor['nome'],$valor['habilitacao']);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirArbitroPrincipal.php');
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor['rg'],$valor['nome'],$valor['habilitacao']);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário atualizado com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao atualizar usuário';
        }
        header('Location: ../visão/exibirArbitroPrincipal.php');
    }

    function exclusao($valor) {
        $resultado = excluir($valor["rg_arbitro"]);

        if($resultado){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário excluido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao excluir usuário';
        }
        header('Location: ../visão/exibirArbitroPrincipal.php');
    }

?>
