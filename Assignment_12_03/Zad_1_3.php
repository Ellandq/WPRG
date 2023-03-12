<?php
    
    function censorship($sentance){
        $blockedFrazes = array("asfsahyasdf", "sdagfserrtvrte", "atgdafhjdas", "aukghbnmcvhdtdfg");
        $words = explode(" ", $sentance);
        
        foreach ($words as $word){
            foreach ($blockedFrazes as $fraze){
                if ($word == $fraze){
                    $word = blockFraze($word);
                    break;
                }
            }
        }
        return implode(" ", $words);
        
    }

    function blockFraze($word){
        $newString = "";
        
        for ($i = 0; $i < strlen($word); $i++){
            $newString .= "*";
        }
        return $newString;
    }
?>