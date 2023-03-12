<?php
    function getArrayLengthFor($arr){
        $maxValue = $arr[0];

        for ($i = 1; $i < count($arr); $i++){
            if ($maxValue < $arr[$i]) $maxValue = $arr[$i];
        }

        return $maxValue;
    }

    function getArrayLengthWhile($arr){
        $maxValue = $arr[0];
        $iteration = 0;
        while ($iteration < count($arr)){
            if ($maxValue < $arr[$iteration]) $maxValue = $arr[$iteration];
            $iteration++;
        }

        return $maxValue;
    }

    function getArrayLengthDoWhile($arr){
        $maxValue = $arr[0];
        $iteration = 0;
        do{
            if ($maxValue < $arr[$iteration]) $maxValue = $arr[$iteration];
            $iteration++;
        }while($iteration < count($arr));

        return $maxValue;
    }

    function getArrayLengthForeach($arr){
        $maxValue = $arr[0];
        foreach($arr as $value){
            if ($maxValue < $value) $maxValue = $value;
        }

        return $maxValue;
    }
?>