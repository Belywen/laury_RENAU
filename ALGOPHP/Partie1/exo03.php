<h2>Exercice 3</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui.";
echo str_replace("aujourd'hui", "demain", $phrase);
echo "</br>";

$tableau = array();
$tableau[0] = "/aujourd'hui/";
$change[0] = "demain";

echo preg_replace($tableau, $change, $phrase);
?>