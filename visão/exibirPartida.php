<?php
require $_SERVER["DOCUMENT_ROOT"]."/fbd/controlador/partida.php";
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
          <li class="active"><a href="exibirPartida.php">Partida</a></li>
          <li><a href="exibirArbitroPrincipal.php">Árbitro principal</a></li>
          <li><a href="exibirTimeAmador.php">Time amador</a></li>
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
  <h2>Partida</h2>
  <a href="cadastro/novaPartida.php" class="btn btn-primary" style="float:right;">Nova partida</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Time da casa</th>
        <th>Time de fora</th>
        <th>Placar</th>
        <th>Local</th>
        <th>Data</th>
        <th>RG do árbitro</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach (exibeDados() as $value) {
        echo "<tr>
                    <td>".$value["nome_time_casa"]."</td>
                    <td>".$value["nome_time_fora"]."</td>
                    <td>".$value["placar"]."</td>
                    <td>".$value["local"]."</td>
                    <td>".$value["data"]."</td>
                    <td>".$value["rg_arbitro"]."</td>
                    <td>
                        <div class='dropdown'>
                          <button class='btn btn-transparent dropdown-toggle' type='button' data-toggle='dropdown'>
                          <i class='fa fa-ellipsis-v fa-lg'></i></button>
                          <ul class='dropdown-menu'>
                            <li><a href='atualizar/atualizarPartida.php?".$value["nome_time_casa"]."?".$value["nome_time_fora"]."'>Atualizar</a></li>
                            <li><a href='' data-toggle='modal' data-target='#modal'>Excluir</a></li>
                          </ul>
                        </div>
                    </td>
              </tr>";
    }
    ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div id="modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Excluir registro</b></h4>
            </div>
            <div class="modal-body">
                <p>Você tem certeza que deseja excluir este registro do banco de dados?</p>
            </div>
            <div class="modal-footer">
                <form action="/fbd/controlador/partida.php" method="post">
                    <div id="inputs">
                        <input type="hidden" class="form-control" name="nome_time_casa">
                        <input type="hidden" class="form-control" name="nome_time_fora">
                        <input type="hidden" value="excluir" name="acao" />
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- fimModal -->

</body>
</html>
