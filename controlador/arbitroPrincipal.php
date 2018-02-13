<?php
    require "../modelo/arbitroPrincipal.php";

    if(isset($_POST["acao"])) {
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

        elseif ($_POST["acao"]=="excluir"){
            exclusao('');
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
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirArbitroPrincipal.php'>";
        }
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor['rg'],$valor['nome'],$valor['habilitacao']);

        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirArbitroPrincipal.php'>";
        }
    }

    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
