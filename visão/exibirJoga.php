<?php
require $_SERVER["DOCUMENT_ROOT"]."/fbd/controlador/joga.php";
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
          <li class="active"><a href="exibirJoga.php">Joga</a></li>
          <li><a href="exibirTime.php">Time</a></li>
          <li><a href="exibirPartida.php">Partida</a></li>
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
  <h2>Joga</h2>
  <a href="cadastro/novaJoga.php" class="btn btn-primary" style="float:right;">Novo joga</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>CPF</th>
        <th>Nome</th>
        <th>Posição</th>
        <th>Data inicial</th>
        <th>Data final</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach (exibeDados() as $value) {
        echo "<tr>
                    <td>".$value["cpf_jogador"]."</td>
                    <td>".$value["nome"]."</td>
                    <td>".$value["posicao"]."</td>
                    <td>".$value["data_inicio"]."</td>
                    <td>".$value["data_fim"]."</td>
                    <td>
                        <div class='dropdown'>
                          <button class='btn btn-transparent dropdown-toggle' type='button' data-toggle='dropdown'>
                          <i class='fa fa-ellipsis-v fa-lg'></i></button>
                          <ul class='dropdown-menu'>
                            <li><a href='atualizar/atualizarJoga.php?".$value["cpf_jogador"]."?".$value["nome"]."'>Editar</a></li>
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
        <form action="/fbd/controlador/arbitroPrincipal.php" method="post">
            <input type="hidden" class="form-control" name="nome">
            <input type="hidden" class="form-control" name="nome">
            <input type="hidden" value="excluir" name="acao" />
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
