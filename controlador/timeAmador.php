<?php
    require "../modelo/timeAmador.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "nome" => $_POST["nome"],
                    "cidade_origem" => $_POST["cidade_origem"],
                    "ano_criacao" => $_POST["ano_criacao"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de time amador!";
            }
        }
        if ($_POST["acao"]=="alterar"){
            alterar('');
        }
        if ($_POST["acao"]=="excluir"){
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
        $resultado = cadastrar($valor["nome"], $valor["cidade_origem"], $valor["ano_criacao"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/timeAmador.php'>";
        }
    }
    function alterar($valor) {
        $resultado = atualizar($valor["nome"], $valor["cidade_origem"], $valor["ano_criacao"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/timeAmador.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
