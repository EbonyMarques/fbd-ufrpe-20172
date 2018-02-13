<?php
    require "../modelo/arbitroPrincipal.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "rg" => $_POST["rg"],
                    "nome" => $_POST["nome"],
                    "habilitacao" => $_POST["habilitacao"]
                );
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de árbitro!";
            }
        }
        elseif ($_POST["acao"]=="atualizar"){
            atualizacao('');
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
