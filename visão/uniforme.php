<?php
require "../controlador/uniforme.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>FBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">FBD</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="../index.html">Início</a></li>
          <li><a href="jogador.php">Jogador</a></li>
          <li><a href="joga.php">Joga</a></li>
          <li><a href="time.php">Time</a></li>
          <li><a href="partida.php">Partida</a></li>
          <li><a href="arbitroPrincipal.php">Árbitro principal</a></li>
          <li><a href="timeAmador.php">Time amador</a></li>
          <li><a href="timeProfissional.php">Time profissional</a></li>
          <li><a href="diretor.php">Diretor</a></li>
          <li><a href="patrocinio.php">Patrocínio</a></li>
          <li><a href="patrocinador.php">Patrocinador</a></li>
          <li class="active"><a href="uniforme.php">Uniforme</a></li>
          <li><a href="cor.php">Cor</a></li>
        </ul>
      </div>
    </nav>

<div class="container">
  <h2>Uniforme</h2>
  <a href="cadastro/novoUniforme.php" class="btn btn-primary" style="float:right;">Novo uniforme</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Código do uniforme</th>
        <th>Código da cor</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Tipo</th>

      </tr>
    </thead>
    <tbody>
    <?php
    foreach (exibeDados() as $value) {
        echo "<tr>
                    <td>".$value["cod_uniforme"]."</td>
                    <td>".$value["cod_cor"]."</td>
                    <td>".$value["nome"]."</td>
                    <td>".$value["descricao"]."</td>
                    <td>".$value["tipo_titular_reserva"]."</td>
              </tr>";
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
