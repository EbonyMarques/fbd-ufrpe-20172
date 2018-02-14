<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/patrocinador.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "cod_patrocinador" => $_POST["cod_patrocinador"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "cod_patrocinador" => $_POST["cod_patrocinador"],
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

    function verificacao($cod_patrocinador) {
        $resultado = lerEspecifico($cod_patrocinador);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor['cod_patrocinador'],$valor['nome']);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirPatrocinador.php');
    }
    function atualizacao($valor) {
        $permissao = atualizar($valor['cod_patrocinador'],$valor['nome']);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirPatrocinador.php');
    }
    function exclusao($valor) {
        $permissao = excluir($valor["cod_patrocinador"]);

        if($permissao){
            $_SESSION['alertaTipo'] = 'success';
            $_SESSION['alertaMensagem'] = '<b>Sucesso!</b> Usuário inserido com sucesso';
        } else {
            $_SESSION['alertaTipo'] = 'error';
            $_SESSION['alertaMensagem'] = '<b>Erro!</b> Ocorreu um erro ao inserir usuário';
        }
        header('Location: ../visão/exibirPatrocinador.php');
    }

?>
