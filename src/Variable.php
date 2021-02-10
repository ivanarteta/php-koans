<?php


namespace koans;


class Variable
{



    /**
     * Variable constructor.
     */
    public function __construct()
    {
    }

    public function declareAnInt(){
        $intVariable = 1;

        return $intVariable;
    }

    public function declareAboolean(){
        $boolVar = true;

        return $boolVar;
    }

    public function declareAfloat(){
        $floatVar = 4.32;

        return $floatVar;
    }

    public function declareAnArray(){
        $arrayVar = array("hola", "que tal");

        return $arrayVar;
    }


    public function declareAnIntNull(){
        $a = null;

        return $a;
    }

    public function declareAnOtherValue(){
        $a = 'hola';
        $b = 1;
        $a = $b;

        return $a;
    }

    public function declareAstringToBool(){
        $x = (bool) 'Hola';

        return $x;
    }
}