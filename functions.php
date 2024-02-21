<?php
function random_char($length){
    $rand_word='';
    while(strlen($rand_word) < $length){
        $rand_letter = chr(rand(33,126));
        if(!str_contains($rand_word, $rand_letter)) $rand_word .= $rand_letter;
    }
    return $rand_word;
}
