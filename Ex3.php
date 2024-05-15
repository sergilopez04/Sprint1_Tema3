<?php

$words = ["albero", "macchina", "borraccia", "zaino"];
$letter = 'a';
$result = "";

$result = (isThatLetterIn($words, $letter)) ? "La lletra '$letter' hi és i està a la posició $result del array.\n" 
: "La lletra introduïda no hi és :(\n";
echo $result;

function isThatLetterIn(array $words, string $letter): bool{
    $result = false;
    $counter = 0;
    foreach ($words as $word) {
        $word = $words[$counter];
        $result = strpos($word, $letter);

        if ($result !== false){
            $result = true;
        }
    }
    return $result;
}

?>