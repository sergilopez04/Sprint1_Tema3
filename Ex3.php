<?php

$words = ["albero", "macchina", "borraccia", "zaino"];
$letter = 'a';
isThatLetterIn($words, $letter);
function isThatLetterIn(array $words, string $letter): bool{
    $result = false;
    foreach ($words as $word) {
        $word = (string)$words;
        $result = strpos($word, $letter);
        if ($result !== false){
            echo "La lletra '$letter' hi és i està a la posició $result del array.\n";
            $result = true;
            return $result;
        }
        else{
        }
    }
    echo "La lletra introduïda no hi és :(";
    $result = false;
    return $result;

}

?>