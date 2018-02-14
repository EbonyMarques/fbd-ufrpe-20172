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
        $permissao = cadastrar($valor["rg"],$valor["nome"],$valor["habilitacao"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar árbitro!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar árbitro!</b>";
        }
        header("Location: ../visão/exibirArbitroPrincipal.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["rg"],$valor["nome"],$valor["habilitacao"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar árbitro!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar árbitro!</b>";
        }
        header("Location: ../visão/exibirArbitroPrincipal.php");
    }

    function exclusao($valor) {
        $resultado = excluir($valor["rg_arbitro"]);

        if($resultado){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "Sucesso ao excluir árbitro!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir árbitro!</b>";
        }
        header("Location: ../visão/exibirArbitroPrincipal.php");
    }
?>
