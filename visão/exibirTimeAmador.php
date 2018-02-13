<?php
require "../controlador/timeAmador.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>FBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
          <li><a href="exibirJogador.php">Jogador</a></li>
          <li><a href="exibirJoga.php">Joga</a></li>
          <li><a href="exibirTime.php">Time</a></li>
          <li><a href="exibirPartida.php">Partida</a></li>
          <li><a href="exibirArbitroPrincipal.php">Árbitro principal</a></li>
          <li class="active"><a href="exibirTimeAmador.php">Time amador</a></li>
          <li><a href="exibirTimeProfissional.php">Time profissional</a></li>
          <li><a href="exibirDiretor.php">Diretor</a></li>
          <li><a href="exibirPatrocinio.php">Patrocínio</a></li>
          <li><a href="exibirPatrocinador.php">Patrocinador</a></li>
          <li><a href="exibirUniforme.php">Uniforme</a></li>
          <li><a href="exibirCor.php">Cor</a></li>
        </ul>
      </div>
    </nav>

<div class="container">
  <h2>Time amador</h2>
  <a href="cadastro/novoTimeAmador.php" class="btn btn-primary" style="float:right;">Novo time amador</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Cidade de origem</th>
        <th>Ano de criação</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach (exibeDados() as $value) {
        echo "<tr>
                    <td>".$value["nome"]."</td>
                    <td>".$value["cidade_origem"]."</td>
                    <td>".$value["ano_criacao"]."</td>
                    <td>
                        <div class='dropdown'>
                          <button class='btn btn-transparent dropdown-toggle' type='button' data-toggle='dropdown'>
                          <i class='fa fa-ellipsis-v fa-lg'></i></button>
                          <ul class='dropdown-menu'>
                            <li><a href='atualizar/atualizarTimeAmador.php?".$value["nome"]."'>Editar</a></li>
                            <li><a href='cadastro/novoTimeAmador.php?".$value["nome"]."'>Excluir</a></li>
                          </ul>
                        </div>
                    </td>
              </tr>";
    }
    ?>
    </tbody>
  </table>
</div>

</body>
</html>
