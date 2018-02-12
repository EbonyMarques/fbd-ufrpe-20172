<?php
    require "../modelo/patrocinio.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "cod_patrocinador" => $_POST["cod_patrocinador"],
                    "nome" => $_POST["nome"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro de patrocínio!";
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
        $resultado = cadastrar($valor["cod_patrocinador"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinio.php'>";
        }
    }
    function alterar($valor) {
        $resultado = atualizar($valor["cod_patrocinador"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinio.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
