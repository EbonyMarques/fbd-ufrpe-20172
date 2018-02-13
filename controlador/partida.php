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
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de partida!";
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
        $permissao = cadastrar($valor['nome_time_casa'],$valor['nome_time_fora'],$valor['placar'],$valor['local'],$valor['data'],$valor['rg']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPartida.php'>";
        }
    }
    function atualizacao($valor) {
        $permissao = atualizar($valor['nome_time_casa'],$valor['nome_time_fora'],$valor['placar'],$valor['local'],$valor['data'],$valor['rg']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPartida.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
