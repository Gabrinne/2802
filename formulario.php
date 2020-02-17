<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
    <h2> Cadastro </h2>
<?php
 if(count($_POST) > 0) {
     $erros=[];
     if(!filter_input(INPUT_POST, "nome")) {
         $erros['nome'] = 'Nome é obrigatório';
     }
 }
 if(filter_input(INPUT_POST, "nascimento")) {
     $data = DateTime::createFromFormat('d/m/y', $_POST['nascimento']);
     if(!$data) {
        $erros['nascimento'] = 'Data deve estar no formato dd/mm/aa';
     }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'E-mail inválido';
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
}

   $filhosConfig = [
       "options" => ["min_range" => 0, "max_range" => 10]
    ]; 
    if (!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0)
     {
        $erros['filhos'] = 'Quantidade de filhos inválida';
    }

    $salarioConfig = [
        "options" => ['decimal' => ',']
    ];
    if(!filter_var($_POST['salario'],
    FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'salário invalido';
    }
    ?>
    
    <!---  <?php  foreach($erros as $erro): ?>  //exibe a mensagem de erro no inicio do form.
        <div class="alert alert-danger" role="alert">
            <?= $erro ?>
        </div>
        <?php endforeach ?>
    --> 

    <form action="#" method="post">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome"> Nome </label>
                <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>    " id="nome" name="nome" value="<?= $_POST['nome'] ?>">
                <div class="invalid-feedback">
                    <?=  $erros['nome']?>
                </div>
            </div>
                   
            <div class="form-group col-md-3">
                <label for="nascimento"> Nascimento </label>
                <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" value="<?= $_POST['nascimento'] ?>" >
            
                <div class="invalid-feedback">
                    <?=  $erros['nascimento']?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email"> E-mail </label>
                <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" value="<?= $_POST['email'] ?>">
            
                <div class="invalid-feedback">
                    <?=  $erros['email']?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="site"> Site </label>
                <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" value="<?= $_POST['site'] ?>">
                
                <div class="invalid-feedback">
                    <?=  $erros['site']?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="filhos"> Qtd de filhos </label>
                <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" value="<?= $_POST['filhos'] ?>">
                
                <div class="invalid-feedback">
                    <?=  $erros['filhos']?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="salario"> Salário </label>
                <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" value="<?= $_POST['salario'] ?>">
                
                <div class="invalid-feedback">
                    <?=  $erros['salario']?>
                </div>
            </div>

            <button class="btn btn-primary btn-lg"> Enviar</button>
            
        </div>
    </form>
</div>