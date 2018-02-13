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
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de time profissional!";
            }
        }
        if ($_POST["acao"]=="atualizar"){
            atualizacao('');
        }
        if ($_POST["acao"]=="excluir"){
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
        $resultado = cadastrar($valor["nome"], $valor["cod_diretor"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirTimeProfissional.php'>";
        }
    }
    function atualizacao($valor) {
        $resultado = atualizar($valor["nome"], $valor["cod_diretor"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirTimeProfissional.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
