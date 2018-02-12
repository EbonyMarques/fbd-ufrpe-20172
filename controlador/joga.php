<?php
    require "../modelo/joga.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "cpf_jogador" => $_POST["cpf_jogador"],
                    "nome_time" => $_POST["nome_time"],
                    "posicao" => $_POST["posicao"],
                    "data_inicio" => $_POST["data_inicio"],
                    "data_final" => $_POST["data_final"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de relação 'joga'!";
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
        $permissao = cadastrar($valor['cpf_jogador'],$valor['nome_time'],$valor['posicao'],$valor['data_inicio'],$valor['data_final']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/joga.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['cpf_jogador'],$valor['nome_time'],$valor['posicao'],$valor['data_inicio'],$valor['data_final']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/joga.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
