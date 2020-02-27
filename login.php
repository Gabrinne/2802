<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        < DESAFIO PHP /> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

</nav>

<div class="container m-auto p-5">
    <div class="col-12 d-flex justify-content-center">
        <form style="width: 500px;" action="valida_login.php" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <small id="senha" class="form-text text-muted">Mínimo 6 caracteres.</small>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                <div class="text-danger">
                    Usuário ou senha inválidos.
                </div>
            <?php } ?>
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                <div class="text-danger">
                    Faça o login antes de acessar as páginas protegidas.
                </div>
            <?php } ?>
            

            <button class="btn btn-primary col-md mt-3" type="submit">Logar</button>
        </form>
    </div>
</div>





<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>