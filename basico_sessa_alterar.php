<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome:</b>
    <?= $_SESSION['nome'] ?>
</p>
<p>
    <b>Email</b>
    <?= $_SESSION['email'] ?>
</p>
<p>
    <a href="basico_sessao.php">voltar</a>
</p>
<p>
    <a href="limpar_sessao.php">limpar</a>
</p>
<?php 
//alterando o valor da sessao
$_SESSION['email'] = 'gabrinne@dev.com';

?>