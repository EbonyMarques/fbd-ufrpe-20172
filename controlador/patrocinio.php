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
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de patrocínio!";
            }
        }
        if ($_POST["acao"]=="atualizar"){
            atualizacao('');
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
    function cadastro($valor) {
        $resultado = cadastrar($valor["cod_patrocinador"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPatrocinio.php'>";
        }
    }
    function atualizacao($valor) {
        $resultado = atualizar($valor["cod_patrocinador"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPatrocinio.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
