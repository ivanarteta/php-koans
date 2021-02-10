<?php

namespace Deg540\koans\Test;



use koans\Variable;
use PHPUnit\Framework\TestCase;

class VariablesTest extends TestCase{

    /**
     * @test
     **/
    public function declaresAnInt(){

        $variable = new Variable();
        $integerValue = $variable -> declareAnInt();

        $this -> assertIsInt($integerValue);
    }

    /**
     * @test
     **/
    public function declaresAboolean(){

        $variable = new Variable();
        $boolVariable = $variable -> declareAboolean();

        $this -> assertIsBool($boolVariable);

    }

    /**
     * @test
     **/
    public function declaresAfloat(){

        $var = new Variable();
        $floatVar = $var -> declareAfloat();

        $this -> assertIsFloat($floatVar);
    }

    /**
     * @test
     **/
    public function declaresAnArray(){

        $var = new Variable();
        $arrayVar = $var -> declareAnArray();

        $this -> assertIsArray($arrayVar);
    }

    /**
     * @test
     **/
    public function declaresAconstanValue(){

        $var = new Variable();
        $constantVar = $var -> declareAconstanValue();

        $this -> assertTrue(defined($constantVar));

    }

    /**
     * @test
     **/
    public function declaresAnIntWithNullValue(){

        $var = new Variable();
        $nullValue = $var -> declareAnIntNull();

        $this -> assertNull($nullValue);
    }

    /**
     * @test
     **/
    public function declaresVariableToOtherValue(){

        $var = new Variable();
        $otherVal = $var -> declareAnOtherValue();

        $this -> assertIsInt($otherVal);

    }

    /**
     * @test
     **/
    public function declaresAstringToBool(){

        $var = new Variable();
        $cast = $var -> declareAstringToBool();

        $this -> assertIsBool($cast);
    }


}
