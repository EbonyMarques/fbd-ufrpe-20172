<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/arbitroPrincipal.php";

    if(isset($_POST["acao"])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "rg" => $_POST["rg"]
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
        $resultado = excluir($valor["rg"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirUniforme.php'>";
        }
    }

?>
