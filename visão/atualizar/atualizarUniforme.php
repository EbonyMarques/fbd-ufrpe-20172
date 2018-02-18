<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/controlador/uniforme.php";

    $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $cod_uniforme = rawurldecode(explode("?", $url)[1]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Atualizar uniforme</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/fbd/css/bootstrap.min.css">
    <script src="/fbd/js/jquery.min.js"></script>
    <script src="/fbd/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">FBD</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/fbd/index.html">Início</a></li>
                <li><a href="../exibirJogador.php">Jogador</a></li>
                <li><a href="../exibirJoga.php">Joga</a></li>
                <li><a href="../exibirTime.php">Time</a></li>
                <li><a href="../exibirPartida.php">Partida</a></li>
                <li><a href="../exibirArbitroPrincipal.php">Árbitro principal</a></li>
                <li><a href="../exibirTimeAmador.php">Time amador</a></li>
                <li><a href="../exibirTimeProfissional.php">Time profissional</a></li>
                <li><a href="../exibirDiretor.php">Diretor</a></li>
                <li><a href="../exibirPatrocinio.php">Patrocínio</a></li>
                <li><a href="../exibirPatrocinador.php">Patrocinador</a></li>
                <li><a href="../exibirUniforme.php">Uniforme</a></li>
                <li><a href="../exibirCor.php">Cor</a></li>
            </ul>
        </div>
    </nav>

    <?php
        $resultado = verificacao($cod_uniforme);

        if (!$resultado) {
            echo "<div class=\"container\">
                    <h2>Uniforme inexistente!</h2>
                  </div>";

            echo "<meta http-equiv='refresh' content='1; url=../visão/exibirUniforme.php'>";
        } else {
            $nome = $resultado["nome"];
            $descricao = $resultado["descricao"];
            $cod_cor = $resultado["cod_cor"];
            $tipo_titular_reserva = $resultado["tipo_titular_reserva"];
            $dados1 = coresDisponiveis();
            $dados2 = timesDisponiveis();

            echo "<div class=\"container\">
                    <h2>Atualizar uniforme</h2>
                    <form action=\"/fbd/controlador/uniforme.php\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"cod_uniforme\">Código do uniforme:</label>
                            <input type=\"text\" readonly class=\"form-control\" name=\"cod_uniforme\" value='$cod_uniforme'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"cod_cor\">Código da cor:</label>
                            <select name=\"cod_cor\" class=\"form-control\">";
                            if (!$dados1){
                                echo "<option readonly>Nenhum registro</option>";
                            } else {
                                foreach ($dados1 as $value){
                                    if ($value["cod_cor"]==$cod_cor){
                                        echo "<option selected value='".$value["cod_cor"]."' >".$value["cod_cor"]."</option>";
                                        continue;
                                    }
                                    echo "<option value='".$value["cod_cor"]."'>".$value["cod_cor"]."</option>";
                                }
                            }echo "
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nome\">Nome do time:</label>
                            <select name=\"nome\" class=\"form-control\">";
                            if (!$dados2){
                                echo "<option readonly>Nenhum registro</option>";
                            } else {
                                foreach ($dados2 as $value){
                                    if ($value["nome"]==$nome){
                                        echo "<option selected value='".$value["nome"]."' >".$value["nome"]."</option>";
                                        continue;
                                    }
                                    echo "<option value='".$value["nome"]."'>".$value["nome"]."</option>";
                                }
                            }echo "
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"tipo_titular_reserva\">Tipo de uniforme:</label>
                            <input type=\"text\" required class=\"form-control\" name=\"tipo_titular_reserva\" value='$tipo_titular_reserva'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"descricao\">Descrição:</label>
                            <input type=\"text\" required class=\"form-control\" name=\"descricao\" value='$descricao'>
                        </div>
                        <input type=\"hidden\" value=\"atualizar\" name=\"acao\" />
                        <button type=\"submit\" required class=\"btn btn-success\">Atualizar</button>
                    </form>
                </div>
            ";
        }
    ?>


</body>
</html>
