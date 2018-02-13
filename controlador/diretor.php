<?php
    require "../modelo/diretor.php";

    if(isset($_POST['acao'])) {
        $dados = array(
            "cod_diretor" => $_POST["cod_diretor"],
            "nome" => $_POST["nome"],
            "sobrenome" => $_POST["sobrenome"]
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

    function verificacao($cod_diretor) {
        $resultado = lerEspecifico($cod_diretor);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }

    function cadastro($valor) {
        $permissao = cadastrar($valor['cod_diretor'],$valor['nome'],$valor['sobrenome']);

        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirDiretor.php'>";
        }
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor['cod_diretor'],$valor['nome'],$valor['sobrenome']);

        if($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirDiretor.php'>";
        }
    }

    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
