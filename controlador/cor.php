<?php
    require "../modelo/cor.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "cod_cor" => $_POST["$cod_cor"],
                    "tonalidade" => $_POST["tonalidade"],
                    "descricao" => $_POST["descricao"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de cor!";
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
        $permissao = cadastrar($valor['cpf_jogador'],$valor['tonalidade'],$valor['descricao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/cor.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['cpf_jogador'],$valor['tonalidade'],$valor['descricao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/cor.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
