<?php 
$original = "abcdefghijklmnopqrstuvwxyz0123456789";
$key = "x0n3uoysf4tiac9vj2lr6dmpzkb85h1qwge7";
$message = "xax2 l9cx2 0xcyix, xaf r9axz dxi90xlf.";
$message = strtolower($message);
$result = '';
$length = strlen($message);

for($i=0; $i<$length; $i++){
    $character = $message[$i];
    $position = strpos($key, $character);
    if($position !== false){
        $replacement = $original[$position];
    }else{
        $replacement = $character;
    }
    $result = $result.$replacement;
}

echo $result;
