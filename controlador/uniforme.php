<?php
    require "../modelo/uniforme.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'cod_uniforme' => $_POST('cod_uniforme'),
                    'descricao' => $_POST('descricao'),
                    'cod_cor' => $_POST('cod_cor'),
                    'tipo_titular_reserva' => $_POST('tipo_titular_reserva')
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
