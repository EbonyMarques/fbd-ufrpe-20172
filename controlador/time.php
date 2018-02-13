<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/time.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "nome" => $_POST["nome"]
            );
            exclusao($dados);
        } else {
            $dados = array(
                "nome" => $_POST["nome"],
                "tipo" => $_POST["tipo"]
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
    function verificacao($nome) {
        $resultado = lerEspecifico($nome);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor) {
        $resultado = cadastrar($valor["nome"], $valor["tipo"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirTime.php'>";
        }
    }

    function atualizacao($valor) {
        $resultado = atualizar($valor["nome"], $valor["tipo"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirTime.php'>";
        }

    }

    function exclusao($valor) {
        $resultado = excluir($valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirUniforme.php'>";
        }
    }

?>
