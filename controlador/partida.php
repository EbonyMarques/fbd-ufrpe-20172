<?php
    require "../modelo/partida.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "nome_time_casa" => $_POST["nome_time_casa"],
                    "nome_time_fora" => $_POST["nome_time_fora"],
                    "placar" => $_POST["placar"],
                    "local" => $_POST["local"],
                    "data" => $_POST["data"],
                    "rg" => $_POST["rg"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de partida!";
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
        $permissao = cadastrar($valor['nome_time_casa'],$valor['nome_time_fora'],$valor['placar'],$valor['local'],$valor['data'],$valor['rg']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/partida.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['nome_time_casa'],$valor['nome_time_fora'],$valor['placar'],$valor['local'],$valor['data'],$valor['rg']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/partida.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
