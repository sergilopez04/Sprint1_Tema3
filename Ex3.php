<?php

$words = ["albero", "macchina", "borraccia", "zaino"];
$letter = 's';
$result = "";

$result = (isThatLetterIn($words, $letter)) ? "La lletra '$letter' hi és i està a la posició $result del array.\n" 
: "La lletra introduïda no hi és :(\n";
echo $result;

function isThatLetterIn(array $words, string $letter): bool {
    foreach ($words as $word) {
        if (strpos($word, $letter) !== false) {
            return true;
        }
    }
    return false;
}

?>