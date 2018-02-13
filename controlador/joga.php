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
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de relação 'joga'!";
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

    function verificacao($cpf, $nome) {
        $resultado = lerEspecifico($cpf, $nome);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }


    function cadastro($valor) {
        $permissao = cadastrar($valor['cpf_jogador'],$valor['nome_time'],$valor['posicao'],$valor['data_inicio'],$valor['data_final']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirJoga.php'>";
        }
    }
    function atualizacao($valor) {
        $permissao = atualizar($valor['cpf_jogador'],$valor['nome_time'],$valor['posicao'],$valor['data_inicio'],$valor['data_final']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirJoga.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
