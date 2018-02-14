<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/uniforme.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="excluir"){
            $dados = array(
                "cod_uniforme" => $_POST["cod_uniforme"]
            );
            exclusao($dados);
        } else {
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
        $permissao = cadastrar($valor["cod_uniforme"], $valor["descricao"], $valor["cod_cor"], $valor["tipo_titular_reserva"], $valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar o uniforme!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar o uniforme!</b>";
        }
        header("Location: ../visão/exibirUniforme.php");
    }

    function atualizacao($valor) {
        $permissao = atualizar($valor["cod_uniforme"], $valor["descricao"], $valor["cod_cor"], $valor["tipo_titular_reserva"], $valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao atualizar o uniforme!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao atualizar o uniforme!</b>";
        }
        header("Location: ../visão/exibirUniforme.php");
    }

    function exclusao($valor) {
        $permissao = excluir($valor["cod_uniforme"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir o uniforme!</b>";
        } else {
            $_SESSION["alertaTipo"] = "error";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir o uniforme!</b>";
        }
        header("Location: ../visão/exibirUniforme.php");
    }

?>
