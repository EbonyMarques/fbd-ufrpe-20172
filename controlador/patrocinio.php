<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/modelo/patrocinio.php";

    if(isset($_POST["acao"])) {
        $dados = array(
            "cod_patrocinador" => $_POST["cod_patrocinador"],
            "nome" => $_POST["nome"]
        );
        if ($_POST["acao"]=="excluir") {
            exclusao($dados);
        }
        if ($_POST["acao"]=="cadastrar"){
                cadastro($dados);
        }
    }

    function exibeDados(){
        $resultado = ler();

        if ($resultado['total'] > 0) {
            return $resultado['dados'];
        } else {
            return false;
        }
    }
    
    function cadastro($valor) {
        $permissao = cadastrar($valor["cod_patrocinador"], $valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao cadastrar o patrocínio!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao cadastrar o patrocínio!</b>";
        }
        header("Location: ../visão/exibirPatrocinio.php");
    }
    function exclusao($valor) {
        $permissao = excluir($valor["cod_patrocinador"], $valor["nome"]);

        if($permissao){
            $_SESSION["alertaTipo"] = "success";
            $_SESSION["alertaMensagem"] = "<b>Sucesso ao excluir o patrocínio!</b>";
        } else {
            $_SESSION["alertaTipo"] = "danger";
            $_SESSION["alertaMensagem"] = "<b>Erro ao excluir o patrocínio!</b>";
        }
        header("Location: ../visão/exibirPatrocinio.php");
    }

?>
