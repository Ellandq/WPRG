<?php
    function getRandomValue($index){
        $arr = array();
        for ($i = 0; $i < 100; $i++){
            $arr[] = rand(1, 1000);
        }
        if ($index < 99) return $arr[$index];
        else return $arr[$index % 100];
    }
?>