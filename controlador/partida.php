<?php
    require "../modelo/partida.php";

    if(isset($_POST['acao'])) {
        if ($_POST["acao"]=="cadastrar"){
            $permitir = true;
            if ($permitir) {
                $dados = array(
                    'nome_time_casa' => $_POST['nome_time_casa'],
                    'nome_time_fora' => $_POST['nome_time_fora'],
                    'placar' => $_POST['placar'],
                    'local' => $_POST['local'],
                    'data' => $_POST['data'],
                    'rg' => $_POST['rg']
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
        $permissao = cadastrar($value['nome_time_casa'],$value['nome_time_fora'],$value['placar'],$value['local'],$value['data'],$value['rg']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function alterar($value) {
        $permissao = atualizar($value['nome_time_casa'],$value['nome_time_fora'],$value['placar'],$value['local'],$value['data'],$value['rg']);
        if ($permissao){
            echo "<meta http-equiv='refresh' content='1; url=../visão/patrocinador.php'>";
        }
    }
    function excluirPorId($value) {
        # pega os dados do form e manda pro modelo...
    }

?>
