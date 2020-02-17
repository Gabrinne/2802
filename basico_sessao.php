<?php 

session_start();
print_R($_SESSION); //aparece todos os dados da sessão.
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@hotmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="basico_sessa_alterar.php">
        alterar sessão.
    </a>
</p>