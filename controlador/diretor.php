<?php
    require "../modelo/diretor.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'cod_diretor' => $_POST['cod_diretor'],
                    'nome' => $_POST['nome'],
                    'sobrenome' => $_POST['sobrenome']
                );
                novo($dados);
            }
            else {
                echo "erro";
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
    function novo($value) {
        $permissao = cadastrar($value['cod_diretor'],$value['nome'],$value['sobrenome']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function alterar($value) {
        $permissao = atualizar($value['cod_diretor'],$value['nome'],$value['sobrenome']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function excluirPorId($value) {
        # pega os dados do form e manda pro modelo...
    }

?>
