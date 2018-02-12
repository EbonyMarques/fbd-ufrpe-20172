<?php
    require "../modelo/cor.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'cod_cor' => $_POST['$cod_cor'],
                    'tonalidade' => $_POST['tonalidade'],
                    'descricao' => $_POST['descricao']
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
        $permissao = cadastrar($value['cpf_jogador'],$value['tonalidade'],$value['descricao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function alterar($value) {
        $permissao = atualizar($value['cpf_jogador'],$value['tonalidade'],$value['descricao']);
        if($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function excluirPorId($value) {
        # pega os dados do form e manda pro modelo...
    }

?>
