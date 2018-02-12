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
          <li><a href="#">Início</a></li>
          <li><a href="../fbd/views/jogador.php">Jogador</a></li>
          <li><a href="../fbd/views/joga.php">Joga</a></li>
          <li><a href="../fbd/views/time.php">Time</a></li>
          <li><a href="../fbd/views/partida.php">Partida</a></li>
          <li><a href="../fbd/views/arbitroPrincipal.php">Árbitro principal</a></li>
          <li><a href="../fbd/views/timeAmador.php">Time amador</a></li>
          <li><a href="../fbd/views/timeProfissional.php">Time profissional</a></li>
          <li><a href="../fbd/views/diretor.php">Diretor</a></li>
          <li><a href="../fbd/views/patrocinio.php">Patrocínio</a></li>
          <li><a href="../fbd/views/patrocinador.php">Patrocinador</a></li>
          <li><a href="../fbd/views/uniforme.php">Uniforme</a></li>
          <li><a href="../fbd/views/cor.php">Cor</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
        <h3>Novo uniforme</h3>
        <form action="/controllerUniforme.php">
          <div class="form-group">
            <label for="cod_uniforme">Código:</label>
            <input type="text" class="form-control" id="cod_uniforme">
          </div>
          <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao">
          </div>
          <div class="form-group">
            <label for="cod_cor">Código da cor:</label>
            <input type="text" class="form-control" id="cod_cor">
          </div>
          <div class="form-group">
            <label for="tipo_titular_reserva">Tipo titular reserva:</label>
            <input type="text" class="form-control" id="tipo_titular_reserva">
          </div>
          <div class="form-group">
            <label for="cod_cor">Código da cor:</label>
            <input type="text" class="form-control" id="cod_cor">
          </div>
          <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

</body>
</html>
