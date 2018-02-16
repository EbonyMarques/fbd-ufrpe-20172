<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/timeAmador.php";

    if(isset($_POST["acao"])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "nome" => $_POST["nome"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "nome" => $_POST["nome"],
                "cidade_origem" => $_POST["cidade_origem"],
                "ano_criacao" => $_POST["ano_criacao"]
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

        if ($resultado['total'] > 0) {
            return $resultado['dados'];
        } else {
            return false;
        }
    }
    
    function verificacao($nome) {
        $resultado = lerEspecifico($nome);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor) {
        $permissao = cadastrar($valor["nome"], $valor["cidade_origem"], $valor["ano_criacao"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar o time amador!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar o time amador!</b>";
        }
        header("Location: ../visão/exibirTimeAmador.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["nome"], $valor["cidade_origem"], $valor["ano_criacao"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar o time amador!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar o time amador!</b>";
        }
        header("Location: ../visão/exibirTimeAmador.php");
    }

    function exclusao($valor) {
        $permissao = excluir($valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir o time amador!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir o time amador!</b>";
        }
        header("Location: ../visão/exibirTimeAmador.php");
    }

?>
