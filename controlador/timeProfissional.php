<?php
    require "../modelo/timeProfissional.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'nome' => $_POST['nome'],
                    'cod_diretor' => $_POST['cod_diretor']
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de time profissional!";
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
        $resultado = cadastrar($valor["nome"], $valor["cod_diretor"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/timeProfissional.php'>";
        }
    }
    function alterar($valor) {
        $resultado = atualizar($valor["nome"], $valor["cod_diretor"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/timeProfissional.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
