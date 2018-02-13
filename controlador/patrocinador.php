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
                cadastro($dados);
            }
            else {
                echo "Erro de cadastro de patrocinador!";
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
        $permissao = cadastrar($valor['cod_patrocinador'],$valor['nome']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPatrocinador.php'>";
        }
    }
    function atualizacao($valor) {
        $permissao = atualizar($valor['cod_patrocinador'],$valor['nome']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='0; url=../visão/exibirPatrocinador.php'>";
        }
    }
    function exclusao($valor) {
        # pega os dados do form e manda pro modelo...
    }

?>
