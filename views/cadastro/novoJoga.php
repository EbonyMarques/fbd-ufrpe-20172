<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastrar relação "joga"</title>
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
        <h3>Nova relação "joga"</h3>
        <form action="/controladorJoga.php">
          <div class="form-group">
            <label for="cpf_jogador">CPF do jogador:</label>
            <input type="text" class="form-control" id="cpf_jogador">
          </div>
          <div class="form-group">
            <label for="nome_time">Nome do time:</label>
            <input type="text" class="form-control" id="nome_time">
          </div>
          <div class="form-group">
              <label for="posicao">Posição do jogador:</label>
              <input type="text" class="form-control" id="posicao">
          </div>
          <div class="form-group">
              <label for="data_inicio">Data de início:</label>
              <input type="text" class="form-control" id="data_inicio">
          </div>
          <div class="form-group">
              <label for="data_final">Data final:</label>
              <input type="text" class="form-control" id="data_final">
          </div>
          <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

</body>
</html>
