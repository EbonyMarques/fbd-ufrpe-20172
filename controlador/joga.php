<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/joga.php";

    if(isset($_POST["acao"])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "cpf_jogador" => $_POST["cpf_jogador"],
                "nome" => $_POST["nome"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "cpf_jogador" => $_POST["cpf_jogador"],
                "nome_time" => $_POST["nome_time"],
                "posicao" => $_POST["posicao"],
                "data_inicio" => $_POST["data_inicio"],
                "data_final" => $_POST["data_final"]
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

    function verificacao($cpf, $nome) {
        $resultado = lerEspecifico($cpf, $nome);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor) {
        $permissao = cadastrar($valor["cpf_jogador"],$valor["nome_time"],$valor["posicao"],$valor["data_inicio"],$valor["data_final"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar relação 'joga'!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar usuário!</b>";
        }
        header("Location: ../visão/exibirJoga.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["cpf_jogador"],$valor["nome_time"],$valor["posicao"],$valor["data_inicio"],$valor["data_final"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar relação 'joga'!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar relação 'joga'!</b>";
        }
        header("Location: ../visão/exibirJoga.php");
    }

    function exclusao($valor) {
        $permissao = excluir($valor["cpf_jogador"],$valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir relação 'joga'!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir relação 'joga'!</b>";
        }
        header("Location: ../visão/exibirJoga.php");
    }

?>
