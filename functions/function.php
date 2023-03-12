<?php

// less words for description vignette
function excerpt(string $text, int $limit): string{
    
    return substr($text, 0, strpos($text, ' ', $limit));
}

//Adapt the spelling to match the search results
function displayResult($results){
    $displayText = ' résultat trouvé';
    if(count($results)>1){
        $displayText = ' résultats trouvés';
        echo count($results) . $displayText;
    }else {
        echo count($results) . $displayText;
    }
}