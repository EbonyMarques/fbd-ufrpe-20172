<?php
    require "../modelo/uniforme.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    "cod_uniforme" => $_POST["cod_uniforme"],
                    "descricao" => $_POST["descricao"],
                    "cod_cor" => $_POST["cod_cor"],
                    "tipo_titular_reserva" => $_POST["tipo_titular_reserva"],
                    "nome" => $_POST["nome"]
                );
                novo($dados);
            }
            else {
                echo "Erro de cadastro!1";
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
    function novo($valor){
        $resultado = cadastrar($valor["cod_uniforme"], $valor["descricao"], $valor["cod_cor"], $valor["tipo_titular_reserva"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/uniforme.php'>";
        }
    }
    function alterar($valor) {
        $resultado = atualizar($valor["cod_uniforme"], $valor["descricao"], $valor["cod_cor"], $valor["tipo_titular_reserva"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='1; url=../visão/uniforme.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
