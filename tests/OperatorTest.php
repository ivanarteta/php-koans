<?php

namespace koans;

use PHPUnit\Framework\TestCase;

class OperatorTest extends TestCase{

    /**
     * @test
     **/
    public function addTest(){
        $operator = new Operator();
        $operatorValue = $operator->addFunction();
        $this->assertEquals(5, $operatorValue);
    }
    /**
     * @test
     **/
    public function substractTest(){
        $operator = new Operator();
        $operatorValue = $operator->substractFunction();
        $this->assertEquals("aa", $operatorValue);
    }
    /**
     * @test
     **/
    public function multiplicateTest(){
        $operator = new Operator();
        $operatorValue = $operator->multiplicateFunction();
        $this->assertEquals(6, $operatorValue);
    }
    /**
     * @test
     **/
    public function divideTest(){
        $operator = new Operator();
        $operatorValue = $operator->divideFunction();
        $this->assertEquals(2, $operatorValue);
    }
    /**
     * @test
     **/
    public function moduleTest(){
        $operator = new Operator();
        $operatorValue = $operator->moduleFunction();
        $this->assertEquals(1, $operatorValue);
    }
    /**
     * @test
     **/
    public function exponentTest(){
        $operator = new Operator();
        $operatorValue = $operator->exponentFunction();
        $this->assertEquals(9, $operatorValue);
    }
    /**
     * @test
     **/
    public function assignVariableToAnotherVariableTest(){
        $operator = new Operator();
        $operatorValue = $operator->assignVariableToAnotherVariableFunction(3, 9);
        $this->assertEquals(3, $operatorValue);
    }
    /**
     * @test
     **/
    public function addVariableToAnotherVariableTest(){
        $operator = new Operator();
        $operatorValue = $operator->addVariableToAnotherVariableFunction(3,2);
        $this->assertEquals(32, $operatorValue);
    }
    /**
     * @test
     **/
    public function multiplyVariableToAnotherVariableTest(){
        $operator = new Operator();
        $operatorValue = $operator->multiplyVariableToAnotherVariableFunction(3,2);
        $this->assertEquals(6, $operatorValue);
    }
    /**
     * @test
     **/
    public function divideVariableByAnotherVariableTest(){
        $operator = new Operator();
        $operatorValue = $operator->divideVariableByAnotherVariableFunction(4,2);
        $this->assertEquals(2, $operatorValue);
    }
    /**
     * @test
     **/
    public function moduleVariableByAnotherVariableTest(){
        $operator = new Operator();
        $operatorValue = $operator->moduleVariableByAnotherVariableFunction(3,2);
        $this->assertEquals(1, $operatorValue);
    }
    /**
     * @test
     **/
    public function equalTest(){
        $operator = new Operator();
        $operatorValue = $operator->equalFunction("hola", "o");
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function identicalTest(){
        $operator = new Operator();
        $operatorValue = $operator->identicalFunction("hola", "hola");
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function notEqualTest(){
        $operator = new Operator();
        $operatorValue = $operator->notEqualFunction("hola", "H");
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function notIdenticalTest(){
        $operator = new Operator();
        $operatorValue = $operator->notIdenticalFunction(3,2);
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function greaterThanTest(){
        $operator = new Operator();
        $operatorValue = $operator->greaterThanFunction(5,3);
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function lessThanTest(){
        $operator = new Operator();
        $operatorValue = $operator->lessThanFunction(2,3);
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function greaterThanOrEqualToTest(){
        $operator = new Operator();
        $operatorValue = $operator->greaterThanOrEqualToFunction(3,2);
        $this->assertTrue($operatorValue);
    }
    /**
     * @test
     **/
    public function lessThanOrEqualToTest(){
        $operator = new Operator();
        $operatorValue = $operator->lessThanOrEqualToFunction(2,3);
        $this->assertTrue($operatorValue);
    }


}
