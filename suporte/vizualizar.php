<?php

include "../includes/cabecalho.php";

include "../includes/menu.php";

include "../includes/conexao.php";

$id = $_GET["id"];

$email = "";
$assunto = "";
$descricao = "";
$sql = "select * from suporte where id = $id";
$todos_os_tickets = mysqli_query($conexao, $sql);
while($um_ticket = mysqli_fetch_assoc($todos_os_tickets)):

$email = $um_ticket["email"];
$assunto = $um_ticket["assunto"];
$descricao = $um_ticket["descricao"];

endwhile;
?>

<h1>Ficha De Suporte</h1>

Email: <?php echo $email ; ?><br>
Assunto: <?php echo $assunto ; ?><br>
Descrição: <?php echo $descricao ; ?><br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>