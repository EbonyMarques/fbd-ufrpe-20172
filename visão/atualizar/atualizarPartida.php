<?php
require $_SERVER["DOCUMENT_ROOT"]."/fbd/controlador/partida.php";

    $url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $urlSeparado = explode("?", $url);

    $nome_time_casa = rawurldecode($urlSeparado[1]);
    $nome_time_fora = rawurldecode($urlSeparado[2]);
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
    <script src="/fbd/js/jquery.mask.min.js"></script>
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
        $resultado = verificacao($nome_time_casa, $nome_time_fora);

        if (!$resultado) {
            echo "<div class=\"container\">
                    <h2>Partida inexistente!</h2>
                  </div>";

            echo "<meta http-equiv='refresh' content='1; url=../visão/exibirPartida.php'>";
        } else {
            $placar = $resultado["placar"];
            $local = $resultado["local"];
            $data = $resultado["data"];
            $rg_arbitro = $resultado["rg_arbitro"];
            $dados= arbitrosDisponiveis();

            echo "<div class=\"container\">
                    <h2>Atualizar partida</h2>
                    <form action=\"/fbd/controlador/partida.php\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"nome_time_casa\">Nome do time da casa:</label>
                            <input type=\"text\" readonly class=\"form-control\" name=\"nome_time_casa\" value='$nome_time_casa'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nome_time_fora\">Nome do time de fora:</label>
                            <input type=\"text\" readonly class=\"form-control\" name=\"nome_time_fora\" value='$nome_time_fora'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"placar\">Placar:</label>
                            <input type=\"text\" required class=\"form-control placar\" name=\"placar\" value='$placar'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"local\">Local:</label>
                            <input type=\"text\" required class=\"form-control\" name=\"local\" value='$local'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"data\">Data:</label>
                            <input type=\"date\" required class=\"form-control\" name=\"data\" value='$data'>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"rg\">RG do árbitro:</label>
                            <select name=\"rg\" class=\"form-control\">
                            <option value=''>Selecione o árbitro</option>";
                            if (!$dados){
                                echo "<option readonly>Nenhum registro</option>";
                            } else {
                                foreach ($dados as $value){
                                    if ($value["rg_arbitro"]==$rg_arbitro){
                                        echo "<option selected value='".$value["rg_arbitro"]."' >".$value["rg_arbitro"]."</option>";
                                        continue;
                                    }
                                    echo "<option value='".$value["rg_arbitro"]."'>".$value["rg_arbitro"]."</option>";
                                }
                            }echo "
                            </select>
                        </div>
                        <input type=\"hidden\" value=\"atualizar\" name=\"acao\" />
                        <button type=\"submit\" required class=\"btn btn-success\">Atualizar</button>
                    </form>
                </div>";
        }
    ?>


</body>
</html>

<script type="text/javascript">
    $('.placar').mask('0x0', {placeholder: '0x0'});
</script>
