<?php
include "../includes/conexao.php";

$email=$_POST["email"];
$assunto=$_POST["assunto"];
$descricao=$_POST["descricao"];
$sql = "insert into suporte(email,assunto,descricao) values('$email','$assunto','$descricao')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php")
?>