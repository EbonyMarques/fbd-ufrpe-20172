<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/partida.php";

    if(isset($_POST["acao"])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "nome_time_casa" => $_POST["nome_time_casa"],
                "nome_time_fora" => $_POST["nome_time_fora"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "nome_time_casa" => $_POST["nome_time_casa"],
                "nome_time_fora" => $_POST["nome_time_fora"],
                "placar" => $_POST["placar"],
                "local" => $_POST["local"],
                "data" => $_POST["data"],
                "rg" => $_POST["rg"]
            );

            if ($_POST["acao"]=="cadastrar"){
                cadastro($dados);
            }

            if ($_POST["acao"]=="atualizar") {
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

    function verificacao($nome_time_casa, $nome_time_fora) {
        $resultado = lerEspecifico($nome_time_casa, $nome_time_fora);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function timesDisponiveis() {
        $resultado = lerTimes();

        if ($resultado['total'] > 0) {
            return $resultado['dados'];
        } else {
            return false;
        }
    }

    function arbitrosDisponiveis() {
        $resultado = lerArbitros();

        if ($resultado['total'] > 0) {
            return $resultado['dados'];
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor["nome_time_casa"],$valor["nome_time_fora"],$valor["placar"],$valor["local"],$valor["data"],$valor["rg"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar partida!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar partida!</b>";
        }
        header("Location: ../visão/exibirPartida.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["nome_time_casa"],$valor["nome_time_fora"],$valor["placar"],$valor["local"],$valor["data"],$valor["rg"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar partida!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar partida!</b>";
        }
        header("Location: ../visão/exibirPartida.php");
    }

    function exclusao($valor) {
        $permissao = excluir($valor["nome_time_casa"], $valor["nome_time_fora"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir partida!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir partida!</b>";
        }
        header("Location: ../visão/exibirPartida.php");
    }

?>
