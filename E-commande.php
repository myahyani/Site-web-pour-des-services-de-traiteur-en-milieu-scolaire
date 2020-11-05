<?php

$text= "\Parent:".$_POST["Nomeparent"].", Enfant:".$_POST["Nomenfant"].", Age:".$_POST["Age"]." Ecole:".$_POST["ecole"].", Lundi:".$_POST["Plainte"];
file_put_contents('commandes.txt', $text, FILE_APPEND);
?>
<!DOCTYPE html>