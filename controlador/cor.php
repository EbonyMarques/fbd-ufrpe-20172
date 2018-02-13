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
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de cor!";
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
        $permissao = cadastrar($valor['cpf_jogador'],$valor['tonalidade'],$valor['descricao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirCor.php'>";
        }
    }
    function atualizacao($valor) {
        $permissao = atualizar($valor['cpf_jogador'],$valor['tonalidade'],$valor['descricao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirCor.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
