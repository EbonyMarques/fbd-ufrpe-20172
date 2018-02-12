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
                novo($dados);
            }
            else {
                echo "Erro de cadastro de jogador!";
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
        $permissao = cadastrar($valor['cpf'],$valor['nome']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/jogador.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['cpf'],$valor['nome']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/jogador.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
