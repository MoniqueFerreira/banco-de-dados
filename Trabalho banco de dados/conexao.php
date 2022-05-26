<?php

$servidor=”localhost”;
$usuario=”root”;
$senha=””;  //caso vc ainda não tenha definido senha deixar em branco, se ja definiu colocar dentro das aspas a senha.
$dbname=”cadastro”;

$conexao=mysqli_connect ($servidor, $usuario, $senha, $dbname);

if (!$conexao) 
{
die  ( "houve um erro:.mysqli_connect_error ( )  );
}

?>
