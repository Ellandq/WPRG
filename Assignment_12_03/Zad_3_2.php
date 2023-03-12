<?php
    function rollDice($rollCount){
        $arr = array();
        for ($i = 0; $i < $rollCount; $i++){
            $arr[] = rand(1, 6);
        }
        return $arr;
    }
?>