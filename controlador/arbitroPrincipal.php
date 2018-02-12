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
                novo($dados);
            }
            else {
                echo "Erro de cadastro de árbitro!";
            }
        }
        elseif ($_POST["acao"]=="alterar"){
            alterar('');
        }
        elseif ($_POST["acao"]=="excluir"){
            excluir('');
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
    function novo($valor) {
        $permissao = cadastrar($valor['rg'],$valor['nome'],$valor['habilitacao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/arbitroPrincipal.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['rg'],$valor['nome'],$valor['habilitacao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/arbitroPrincipal.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
