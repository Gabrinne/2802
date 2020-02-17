<?php
//VALIDAÇÃO DO NOME
 if(count($_POST) > 0)  //if(isset($_POST[‘nome’])) - “SE POST NOME ESTIVER SETADO (COM INFORMAÇÕES)  POR FAVOR EXECUTE O BLOCO DE CÓDIGO ENTRE AS CHAVES. SENDO:
    {
if(!filter_input(INPUT_POST, “nome”))  // se no campo não estiver presente, ele irá entrar em execução no bloco de código.
{
echo ‘Nome é obrigatório’. ‘<br>’;
}

// -----------------------------------------------------------------------------------------------
// VALIDAÇÃO DO NASCIMENTO
if(filter_input(INPUT_POST,"nascimento"))  {
        $data = DateTime::createFromFormat('d/m/y', $_POST['nascimento']); //:: é como se fosse =>// pede-se que a data de nascimento inputada seja criada e mostrada no formado solicitado. 
        if(!$data) //caso não aconteça, pfv exibir a mensagem abaixo:
             {
            echo'Data deve estar no formato dd/mm/aa', '<br>';
        }
}
//-----------------------------------------------------------------------------------------------------
//VALIDAÇÃO DE EMAIL
//Para validação do email usa-se uma função diferente das anteriores acima. 
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) //se não tiver e-mail inputado, por favor exibir:
 {
    echo 'Email inválido', '<br>';
}
//-------------------------------------------------------------------------------------------------------
//VALIDAÇÃO DE URL SITES ETC.
if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) //Se não tiver nada imputado, por favor exibir:
 {
    echo 'Site inválido', '<br>';
}
 ?>
