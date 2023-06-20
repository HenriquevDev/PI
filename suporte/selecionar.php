<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>
<h1>
    <img src="../img/suporte.png">
    Módulo de Suporte
</h1>

<p>
    <a href="novo.php">Adicionar Ticket de Ajuda</a>
</p>
<h2>Listagem de Tickets</h2>
<table class="table table-bordered">
    <tr class="table text-center table-secondary table-striped-columns fw-semibold">
        <td>Código</td>
     
        <td>Email</td>
        <td>Assunto</td>
        <td>Descrição</td>
        <td>Ações</td>
    </tr>
    <?php
    $sql = "select* from suporte";
    $todos_os_tickets = mysqli_query($conexao, $sql);
    while ($um_ticket = mysqli_fetch_assoc($todos_os_tickets)) :
    ?>
        <tr>
            <td><?php echo $um_ticket['id']; ?></td>
            <td><?php echo $um_ticket['email'] ?></td>
            <td><?php echo $um_ticket['assunto'] ?></td>
            <td><?php echo $um_ticket['descricao'] ?></td>
            <td>
                <a href="#">Vizualizar</a>
                <a href="#">Editar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>

    <?php
    endwhile;
    ?>

</table>


<?php
include "../includes/rodape.php";
?>