<?php 

echo '<pre>';
print_r($_POST);
echo '<pre>';

//prevenindo bugs futuros - substituindo serquilhas por traços.
$nome = str_replace('#', '-', $_POST['nome']);
$preco = str_replace('#', '-', $_POST['preco']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $nome . '#' . $preco . '#'. $descricao . PHP_EOL; //Constante que armazena o caractere de quebra de linha.

//abrindo arquivo de produtos
$produto = fopen('produto.txt', 'a');
//escrevendo o texto
fwrite($produto, $texto);
//fechando o arquivo
fclose($produto);

//echo $texto;
header('Location: adicionarprod.php')
?>