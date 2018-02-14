<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/cor.php";

    if(isset($_POST["acao"])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "cod_cor" => $_POST["cod_cor"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "cod_cor" => $_POST["cod_cor"],
                "tonalidade" => $_POST["tonalidade"],
                "descricao" => $_POST["descricao"]
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

    function verificacao($cod_cor) {
        $resultado = lerEspecifico($cod_cor);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor["cod_cor"],$valor["tonalidade"],$valor["descricao"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar cor!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar cor!</b>";
        }
        header("Location: ../visão/exibirCor.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["cod_cor"],$valor["tonalidade"],$valor["descricao"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar cor!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar!</b>";
        }
        header("Location: ../visão/exibirCor.php");
    }

    function exclusao($valor) {
        $resultado = excluir($valor["cod_cor"]);

        if($resultado){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir cor!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir cor!</b>";
        }
        header("Location: ../visão/exibirCor.php");
    }

?>
