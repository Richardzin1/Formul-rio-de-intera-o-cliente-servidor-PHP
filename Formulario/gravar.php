<?php

// Verifica se o nome foi enviado
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$sobrenome = (isset($_POST['sobrenome'])) ? $_POST['sobrenome'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$idade = (isset($_POST['idade'])) ? $_POST['idade'] : '';

$erros = '';

if(empty($nome)){
   $erros .= "O campo nome está vazio !! <br>";
}
if(empty($sobrenome)){
   $erros .= "O campo sobrenome está vazio !! <br>";
}
if(empty($email)){
   $erros .= "O campo email está vazio !! <br>";
}
if(empty($idade)){
   $erros .= "O campo idade está vazio !! <br>";
}
if ($erros != '') {
   echo "Existem erros no formulário: <br> $erros  <br>";
}
echo "- Nome: $nome<br>";
echo "- Sobrenome: $sobrenome <br>";
echo "- Email: $email <br>";
echo "- Idade $idade <br>";
