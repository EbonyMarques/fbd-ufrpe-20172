<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/uniforme.php";

    if(isset($_POST['acao'])) {
        $dados = array(
            "cod_uniforme" => $_POST["cod_uniforme"],
            "descricao" => $_POST["descricao"],
            "cod_cor" => $_POST["cod_cor"],
            "tipo_titular_reserva" => $_POST["tipo_titular_reserva"],
            "nome" => $_POST["nome"]
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

    function verificacao($cod_uniforme) {
        $resultado = lerEspecifico($cod_uniforme);

        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }

    }

    function cadastro($valor){
        $resultado = cadastrar($valor["cod_uniforme"], $valor["descricao"], $valor["cod_cor"], $valor["tipo_titular_reserva"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirUniforme.php'>";
        }
    }

    function atualizacao($valor) {
        $resultado = atualizar($valor["cod_uniforme"], $valor["descricao"], $valor["cod_cor"], $valor["tipo_titular_reserva"], $valor["nome"]);

        if ($resultado) {
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirUniforme.php'>";
        }
    }

    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
