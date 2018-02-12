<?php
    require "../modelo/joga.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'cpf_jogador' => $_POST('cpf_jogador'),
                    'nome_time' => $_POST('nome_time'),
                    'posicao' => $_POST('posicao'),
                    'data_inicio' => $_POST('data_inicio'),
                    'data_final' => $_POST('data_final')
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
