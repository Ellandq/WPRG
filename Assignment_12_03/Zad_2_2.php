<?php
    function getNationality($country){
        $nationalities = array(
            "Poland" => "Polish",
            "Germany" => "German",
            "Ukraine" => "Ukrainian",
            "France" => "French",
            "Russia" => "Russian",
            "England" => "British"
        );

        if (array_key_exists($country, $nationalities)){
            return $nationalities[$country];
        }else return "Unknown";
    }
?>