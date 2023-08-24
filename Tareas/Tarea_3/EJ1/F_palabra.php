<?php

    function PalabraMasLarga($cadena){
        $text = str_word_count($cadena, 1);
        $text2 = '';

        foreach ($text as $palabra) {
            if(strlen($palabra)>strlen($text2)){
                $text2 = $palabra;
            }
        }

        return $text2;
    }

?>