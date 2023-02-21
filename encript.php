<?php
$original = "abcdefghijklmnopqrstuvwxyz0123456789";
$key = "x0n3uoysf4tiac9vj2lr6dmpzkb85h1qwge7";
$message = "Amar sonar bangla, ami tomay valobasi.";
$message = strtolower( $message );
$result = '';
$length = strlen( $message );

for ( $i = 0; $i < $length; $i++ ) {
    $character = $message[$i];
    $position = strpos( $original, $character );
    if ( $position !== false ) {
        $replacement = $key[$position];
    } else {
        $replacement = $character;
    }
    $result = $result . $replacement;
}

echo $result;
