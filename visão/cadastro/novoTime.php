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
                <li><a href="../jogador.php">Jogador</a></li>
                <li><a href="../joga.php">Joga</a></li>
                <li><a href="../time.php">Time</a></li>
                <li><a href="../partida.php">Partida</a></li>
                <li><a href="../arbitroPrincipal.php">Árbitro principal</a></li>
                <li><a href="../timeAmador.php">Time amador</a></li>
                <li><a href="../timeProfissional.php">Time profissional</a></li>
                <li><a href="../diretor.php">Diretor</a></li>
                <li><a href="../patrocinio.php">Patrocínio</a></li>
                <li><a href="../patrocinador.php">Patrocinador</a></li>
                <li><a href="../uniforme.php">Uniforme</a></li>
                <li><a href="../cor.php">Cor</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2>Novo time</h2>
        <form action="/fbd/controlador/time.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" name="tipo">
            </div>
            <div class="form-group">
                <label for="cod_uniforme">Código do uniforme:</label>
                <input type="text" class="form-control" name="cod_uniforme">
            </div>
            <input type="hidden" value="cadastrar" name="acao" />
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

</body>
</html>
