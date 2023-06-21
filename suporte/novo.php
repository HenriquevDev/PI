<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Novo Cliente</h1>
<p>Vamos Cadastrar um novo cliente no sistema.</p>
<form action="inserir.php" method="post">
   Email <input name="email" required maxlength="50">
  Assunto <input name="assunto" required>
   Descrição <input name="descricao">

    <br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>