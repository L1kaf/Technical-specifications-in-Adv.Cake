<?php

namespace App;

class Revert
{
    public function revertCharacters($str) 
    {
        $words = preg_split('/(\s+)/u', $str, -1, PREG_SPLIT_DELIM_CAPTURE);

        foreach ($words as &$word) {
            $word = preg_replace_callback('/\p{L}+/u', function ($match) {
                $reversed = strrev($match[0]);
                $result = '';

                for ($i = 0; $i < mb_strlen($match[0]); $i++) {
                    $char = mb_substr($match[0], $i, 1);
                    $reversedChar = mb_substr($reversed, $i, 1);
                    $result .= ctype_upper($char) ? mb_strtoupper($reversedChar) : mb_strtolower($reversedChar);
                }

                return $result;
            }, $word);
        }

        return implode('', $words);
    }
}

