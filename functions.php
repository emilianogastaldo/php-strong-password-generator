<?php
function random_char($length){
    $rand_word='';
    while(strlen($rand_word) < $length){
        $rand_word .= chr(rand(33,126));
    }
    return $rand_word;
}
