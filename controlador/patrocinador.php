<?php
    require "../modelo/patrocinador.php";

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
                echo "Erro de cadastro de patrocinador!";
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
        $permissao = cadastrar($valor['cod_patrocinador'],$valor['nome']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function alterar($valor) {
        $permissao = atualizar($valor['cod_patrocinador'],$valor['nome']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function excluirPorId($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
