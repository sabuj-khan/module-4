<?php
$original = "abcdefghijklmnopqrstuvwxyz0123456789";
$key = "x0n3uoysf4tiac9vj2lr6dmpzkb85h1qwge7";
$parts = str_split( $original );
shuffle( $parts );
$key = join( '', $parts );
echo $key;