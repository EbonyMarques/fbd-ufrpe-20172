<?php
    require "../modelo/patrocinio.php";

    if(isset($_POST['acao'])) {
        $dados = array(
            "cod_patrocinador" => $_POST["cod_patrocinador"],
            "nome" => $_POST["nome"]
        );
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de patrocínio!";
            }
        }
        if ($_POST["acao"]=="excluir"){
            exclusao($dados);
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
        $resultado = cadastrar($valor["cod_patrocinador"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPatrocinio.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
