<?php
    require "../modelo/joga.php";

    function exibeDados(){
        $resultado = ler();
        if ($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }
    function novo($value) {
        # pega os dados do form e manda pro modelo...
    }

?>