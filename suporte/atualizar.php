<?php
include "../includes/conexao.php";
$id = $_GET["id"];
$email = $_POST["email"];
$sql = "update suporte set email = '$email' where id =$id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location: selecionar.php");
?>