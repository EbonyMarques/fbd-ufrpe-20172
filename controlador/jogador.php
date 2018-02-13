<?php
    require "../modelo/jogador.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "cpf" => $_POST["cpf"],
                    "nome" => $_POST["nome"]
                );
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de jogador!";
            }
        }

        if ($_POST["acao"]=="atualizar"){
            $dados = array(
                "cpf" => $_POST["cpf"],
                "nome" => $_POST["nome"]
            );
            atualizacao($dados);
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

    function verificacao($cpf) {
        $resultado = lerEspecifico($cpf);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor) {
        $permissao = cadastrar($valor['cpf'],$valor['nome']);

        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirJogador.php'>";
        }
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor['cpf'],$valor['nome']);

        if ($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirJogador.php'>";
        }
    }

    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
