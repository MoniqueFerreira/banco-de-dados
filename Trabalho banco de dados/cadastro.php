<?php
// vamos incluir um arquivo com o comando include. para não ter que repetir todo o código aqui dentro.
include (“conexao.php”)

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
// se colocar a senha dessa forma no banco de dados vai mostrar exatamente como usuário colocou, para ter uma segurança maior. usa se assim> $senha=md5($_POST[‘senha’] ); dessa forma a senha vai se misturar com caracteres aleatórios.

$sql= “INSERT INFO cadastro ( nome, sobrenome, email, senha )”  values ('$nome', '$sobrenome', '$email', '$senha');

if (mysqli_query($conexao, $sql) {
  echo “Usuário cadastrado com sucesso”;
}
else{
echo “Erro”. mysqli_connect_error($conexao);
}

mysqli_close($conexao);

?>
