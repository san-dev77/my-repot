<?php ob_start() ?>

voici test1
<?php
$content = ob_get_clean();
$title = "test1";
require 'template.php';
?>