<?php
    require "../modelo/diretor.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "cod_diretor" => $_POST["cod_diretor"],
                    "nome" => $_POST["nome"],
                    "sobrenome" => $_POST["sobrenome"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de diretor!";
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
        $permissao = cadastrar($valor['cod_diretor'],$valor['nome'],$valor['sobrenome']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/diretor.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['cod_diretor'],$valor['nome'],$valor['sobrenome']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/diretor.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
