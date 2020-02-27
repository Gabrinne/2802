<?php

session_start();


//variavel que verifica se a autenticacao foi realizada
$usuario_autenticado = false;

//usuarios do sistema 
$usuarios = array(
    array('email' => 'gabi@hotmail.com', 'senha' => '123456'),
    array('email' => 'lua@hotmail.com', 'senha' => '654321'),
);

/*echo'<pre>';
print_r($usuarios);
echo'</pre>'; */

//percorrer o array para verificar se o login inputado existe.
foreach($usuarios as $user) {
 if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
   $usuario_autenticado = true;
 }
}
if($usuario_autenticado) {
    header('Location: index.php');
   $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: login.php?login=erro');
}

/*
print_r($_POST);
echo '<br>';
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];
*/
?>