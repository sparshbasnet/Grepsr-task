<?php
function password_strength($password) {
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || strlen($password) > 14) {
        echo 0;
        echo "<br>";
    }else{
        echo 1;
        echo "<br>";
    }
}

password_strength('E#?SGrY8Laf');
password_strength('sparsh');
password_strength('Rv1@fdffdfdfdfddfddfdffdfd');
?>