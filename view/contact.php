<?php
$title='Contato';
require 'header.php';
?>
<div style="width:<?php print SITE_WIDTH_SMALL; ?>;margin:0 auto;text-align:left;max-width:100%;">
    <?php
    require 'top.php';
    ?>
    <center>
    <form action="<?php print SITE_URL ?>contact/" class="formHorizontal"
        method="post">
        <label for="name">Nome</label><br>
        <input type="text" name="name" id="name" style="width:100%;"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" style="width:100%;"><br>
        <label for="message">Mensagem</label><br>
        <textarea name="message" id="message" rows="4"
        maxlength="1024" style="width:100%;"></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
    </center>
</div>
