<?php

$words = ["albero", "macchina", "borraccia", "zaino"];
$letter = 'a';
$result = "";


function isThatLetterIn(array $words, string $letter): bool {
    foreach ($words as $word) {
        if (strpos($word, $letter) !== false) {
            return true;
        }
    }
    return false;
}

$result = (isThatLetterIn($words, $letter)) ? "La lletra '$letter' hi és!\n" 
: "La lletra introduïda no hi és :(\n";
echo $result;

?>