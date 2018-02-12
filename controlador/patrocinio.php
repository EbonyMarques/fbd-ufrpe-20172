<?php
    require "../modelo/patrocinio.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'cod_patrocinador' => $_POST('cod_patrocinador'),
                    'nome' => $_POST('nome')
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
        # pega os dados do form e manda pro modelo...
    }
    function alterar($value) {
        # pega os dados do form e manda pro modelo...
    }
    function excluirPorId($value) {
        # pega os dados do form e manda pro modelo...
    }

?>
