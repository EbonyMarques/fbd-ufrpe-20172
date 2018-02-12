<?php
    require "../modelo/arbitroPrincipal.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'rg' => $_POST['rg'],
                    'nome' => $_POST['nome'],
                    'habilitacao' => $_POST['habilitacao']
                );
                novo($dados);
            }
            else {
                echo "erro";
            }
        }
        elseif ($_POST["acao"]=="alterar"){
            alterar('');
        }
        elseif ($_POST["acao"]=="excluir"){
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
        $permissao = cadastrar($value['rg'],$value['nome'],$value['habilitacao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function alterar($value) {
        $permissao = atualizar($value['rg'],$value['nome'],$value['habilitacao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function excluirPorId($value) {
        # pega os dados do form e manda pro modelo...
    }

?>
