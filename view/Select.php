<?php
require_once '../model/FilmeDao.php';

use model\FilmeDao;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Listagem de Filmes</title>
</head>

<body>

    <div class="container-fluid">

        <h1>Listagem de Filmes</h1> <br>

        <?php
        $filmeDao = new FilmeDao();
        $movie = $filmeDao->select();
        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Genero</th>
                    <th colspan="2">Operações</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($movie as $movieTmp) {
                    $id = $movieTmp->getId();
                    $nome = $movieTmp->getNome();
                    $genero = $movieTmp->getGenero();
                ?>
                    <tr>
                        <td><?= $id; ?></td>
                        <td><?= $nome; ?></td>
                        <td><?= $genero; ?></td>
                        <td><a href='update.php?id=<?=$id; ?>' class='btn btn-warning'>Alterar</a></td>
                        <td><a href='../control/Controller.php?operacao=delete&id=<?=$id; ?>' class='btn btn-danger'>Excluir</a></td>
                    </tr>
                <?php } ?>
                <!-- Fechamento do laço de repetição -->
            </tbody>
        </table>

        <a href="Insert.html" class="btn btn-primary">Novo Registro</a>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
</body>

</html>