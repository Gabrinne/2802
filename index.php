        <?php 
            require_once "validador_acesso.php"
        ?>

        <?php 
        //array que vai conter todos os produtos.
        $todos_produtos = array();
        //abrir o arquivo produto
        $produto = fopen('produto.txt', 'r');
        //percorrer produtos
        while(!feof($produto)) { //funcao que percorre o arquivo até identificar o fim dele.
        $registro = fgets($produto); //recupera os dados que estão na linha.
        $todos_produtos[] = $registro;

        }
        //fechar o arquivo aberto
        fclose($produto);

        /*echo '<pre>';
        print_r($todos_produtos);
        echo '</pre>'; */
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

            <title>Desafio PHP</title>
        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"> < DESAFIO PHP/> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar"
                    aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="textoNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php" >Home </a>
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

            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered">
                            <h2>Lista de Produtos</h2>
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Preços</th>
                                <th scope="col">Ações</th>
                            </tr>
                            </thead>
                                    <?php foreach($todos_produtos as $prod) { ?>
                                     <?php  
                                     $dados_produtos = explode('#', $prod);
                                     if(count($dados_produtos) < 3) {
                                        continue;
                                    }   
                                     /*echo '<pre>';
                                     print_r($dados_produtos); 
                                     echo '</pre>'; */
                                     ?>
                                    <div class="responsive-table">  
                                    <tbody>
                                        <tr>
                                        <th scope="row"> <?= key($dados_produtos) ?></th>
                                        <td> <?= $dados_produtos[0]; ?> </td>
                                        <td> <?= $dados_produtos[2]; ?>  </td>
                                        <td> <?= $dados_produtos[1]; ?> </td>
                                        <td>
                                        
                                            <button type="button" class="btn btn-primary">Editar</button>
                                            <button type="button" class="btn btn-danger">Excluir</button>
                                        </td>
                                        </tr>  
                                    </tbody >                       
                                    </div>
                                   
                                    <?php } ?>             
                        </table>
                    </div>
                </div>
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