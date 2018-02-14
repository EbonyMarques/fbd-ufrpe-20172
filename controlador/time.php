<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/time.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "nome" => $_POST["nome"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "nome" => $_POST["nome"],
                "tipo" => $_POST["tipo"]
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
    function verificacao($nome) {
        $resultado = lerEspecifico($nome);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor) {
        $permissao = cadastrar($valor["nome"], $valor["tipo"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar o time!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar o time!</b>";
        }
        header("Location: ../visão/exibirTime.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["nome"], $valor["tipo"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar o time!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar o time!</b>";
        }
        header("Location: ../visão/exibirTime.php");
    }

    function exclusao($valor) {
        $permissao = excluir($valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir o time!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir o time!</b>";
        }
        header("Location: ../visão/exibirTime.php");
    }

?>
