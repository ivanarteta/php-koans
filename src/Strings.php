<?php

namespace koans;
class Strings{

    public function doubleQuotedStringsAreStrings(): string{
        return "Hola";
    }

    public function singleQuotedStringsAreAlsoStrings(): string{
        return 'Hola';
    }

    public function dotConcatenatesStrings(string $s1, string $s2):string{
        return $s1 . $s2;
    }

    public function getTheLengthOfAString():int{
        $string = "hola soy maider";
        return strlen($string);
    }

    public function countWordsInAString(): int{
        $string = "hola soy maider";
        return str_word_count($string);
    }

    public function reverseAString(): string{
        return strrev("maider");
    }

    public function replaceTextWithinAString(): string{
        $string = "hola soy maider";
        $string = str_replace("maider", "ivan", $string);
        return $string;
    }

    public function searchForATextWithinAString(): bool{
        $string = "hola soy maider";
        return strpos($string, "soy");
    }

    public function dotEqualsAppendsToEndOfString(string $string, string $string1){
        $string .= $string1;
        return $string;
    }


}