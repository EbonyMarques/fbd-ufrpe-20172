<?php
    require "../modelo/cor.php";

    if(isset($_POST['acao'])) {
        $dados = array(
            "cod_cor" => $_POST["cod_cor"],
            "tonalidade" => $_POST["tonalidade"],
            "descricao" => $_POST["descricao"]
        );

        if ($_POST["acao"]=="cadastrar"){
            cadastro($dados);
        }

        if ($_POST["acao"]=="atualizar"){
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

    function verificacao($cod_cor) {
        $resultado = lerEspecifico($cod_cor);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor['cod_cor'],$valor['tonalidade'],$valor['descricao']);

        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirCor.php'>";
        }
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor['cod_cor'],$valor['tonalidade'],$valor['descricao']);

        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirCor.php'>";
        }
    }

    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
