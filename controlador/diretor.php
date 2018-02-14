<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/diretor.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "cod_diretor" => $_POST["cod_diretor"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "cod_diretor" => $_POST["cod_diretor"],
                "nome" => $_POST["nome"],
                "sobrenome" => $_POST["sobrenome"]
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

    function verificacao($cod_diretor) {
        $resultado = lerEspecifico($cod_diretor);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor["cod_diretor"],$valor["nome"],$valor["sobrenome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar diretor!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar diretor!</b>";
        }
        header("Location: ../visão/exibirDiretor.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["cod_diretor"],$valor["nome"],$valor["sobrenome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar diretor!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar diretor!</b>";
        }
        header("Location: ../visão/exibirDiretor.php");
    }

    function exclusao($valor) {
        $resultado = excluir($valor["cod_diretor"]);

        if($resultado){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir diretor!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir diretor!</b>";
        }
        header("Location: ../visão/exibirDiretor.php");
    }

?>
