<?php
    function multiplicationTable($size) {
        for ($i = 1; $i <= $size; $i++) {
            for ($j = 1; $j <= $size; $j++) {
                $value = $i * $j;
                echo str_pad($value, 4, " ", STR_PAD_LEFT);
            }
            echo "\n";
        }
    }
?>