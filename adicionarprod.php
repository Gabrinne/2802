<?php 
    require_once "validador_acesso.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            < DESAFIO PHP /> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
            aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adicionarprod.php">Adicionar produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="criarusuario.php">Usuários</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php">SAIR</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">           
            <h1>Adicionar produto</h1>
            <div class="row">
                <div class="col">
                    <form action="registro_produtos.php" method="post" enctype="multipart/form-data">
                        <label for="input1">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="col">
                        <label for="input2">Preço</label>
                        <input type="text" name="preco" class="form-control">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="input1">Descrição</label>
                    <textarea class="form-control" name="descricao" rows="10"></textarea>
                </div>

                <!--
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="escolherarquivo">
                    <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo...</label>
                    <div class="invalid-feedback">Exemplo de feedback inválido para input file</div>
                </div> -->
                
                <button class="btn btn-primary col-lg mt-3" type="submit">Adicionar</button>
            </form>
        </div>










    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>

</html>