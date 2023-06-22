<?php

include "../includes/cabecalho.php";

include "../includes/menu.php";

include "../includes/conexao.php";
$id = $_GET["id"];
$email = "";
$sql = "select * from suporte where id = $id";
$todos_os_tickets = mysqli_query($conexao, $sql);
while ($um_ticket = mysqli_fetch_assoc($todos_os_tickets)) :
    $email = $um_ticket["email"];
endwhile;
?>
<h1>Editar Ticket <?php echo $id; ?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
    Email: <input name="email" value="<?php echo $email; ?>"><br>
    <button type="submit">Atualizar</button>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>