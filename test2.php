<?php ob_start() ?>

<img src="res/loader.gif" alt="">
mon new type font

<button>Clique me !</button>

<?php
$content = ob_get_clean();
$title = "test2";

require 'template.php';
?>