<?php


$nome = "Pedro";

?>

<form action = "">
    <div>
        <input type = "text" value = "<?= $nome; ?>"> <!-- A notação "?=" simplificao "?php echo". -->
</div>
<div>
    <input type = "submit" value = "Enviar">
</div>
</form>
