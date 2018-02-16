<?php
    require $_SERVER["DOCUMENT_ROOT"]."/fbd/controlador/diretor.php";

    $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $cod_diretor = explode("?", $url)[1];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastrar jogador</title>
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
        $resultado = verificacao($cod_diretor);

        if (!$resultado) {
            echo "<div class=\"container\">
                    <h2>Diretor inexistente!</h2>
                  </div>";

            echo "<meta http-equiv='refresh' content='1; url=../visão/exibirDiretor.php'>";
        } else {
            $nome = $resultado["nome"];
            $sobrenome = $resultado["sobrenome"];

            echo "<div class=\"container\">
                    <h2>Atualizar jogador</h2>
                    <form action=\"/fbd/controlador/diretor.php\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"cod_diretor\">Código:</label>
                            <input type=\"text\" readonly class=\"form-control\" name=\"cod_diretor\" value=\"$cod_diretor\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nome\">Nome:</label>
                            <input type=\"text\" required class=\"form-control\" name=\"nome\" value=\"$nome\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"sobrenome\">Sobrenome:</label>
                            <input type=\"text\" required class=\"form-control\" name=\"sobrenome\" value=\"$sobrenome\">
                        </div>
                        <input type=\"hidden\" value=\"atualizar\" name=\"acao\" />
                        <button type=\"submit\" required class=\"btn btn-success\">Atualizar</button>
                    </form>
                </div>";
        }
    ?>


</body>
</html>
