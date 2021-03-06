<?php
require $_SERVER["DOCUMENT_ROOT"]."/fbd/controlador/uniforme.php";
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

    <div class="container">
        <h2>Novo uniforme</h2>
        <form action="/fbd/controlador/uniforme.php" method="post">
            <div class="form-group">
                <label for="cod_uniforme">Código do uniforme:</label>
                <input type="text" required class="form-control" name="cod_uniforme">
            </div>
            <div class="form-group">
                <label for="cod_cor">Código da cor:</label>
                <select name="cod_cor" class="form-control">
                    <option value="">Selecione a cor</option>
                    <?php
                    $dados = coresDisponiveis();
                    if (!$dados){
                        echo "<option readonly>Nenhum registro</option>";
                    } else {
                        foreach ($dados as $value){
                            echo "<option value='".$value["cod_cor"]."'>".$value["cod_cor"]."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nome">Nome do time:</label>
                <select name="nome" class="form-control">
                    <option value="">Selecione o time</option>
                    <?php
                    $dados = timesDisponiveis();
                    if (!$dados){
                        echo "<option readonly>Nenhum registro</option>";
                    } else {
                        foreach ($dados as $value){
                            echo "<option value='".$value["nome"]."'>".$value["nome"]."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tipo_titular_reserva">Tipo de uniforme:</label>
                <input type="text" required class="form-control" name="tipo_titular_reserva">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" required class="form-control" name="descricao">
            </div>
            <input type="hidden" value="cadastrar" name="acao" />
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>

</body>
</html>
}
