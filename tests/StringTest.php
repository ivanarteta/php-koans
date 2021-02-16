<?php
namespace koans;
use PHPUnit\Framework\TestCase;

class StringTest extends TestCase{

    /**
     * @test
     **/
    public function doubleQuotedStringsAreStringsTest(){
        $string = new Strings();
        $stringValue = $string->doubleQuotedStringsAreStrings();
        $this->assertIsString($stringValue);
    }
    /**
     * @test
     **/
    public function singleQuotedStringsAreAlsoStringsTest(){
        $string = new Strings();
        $stringValue=$string->singleQuotedStringsAreAlsoStrings();
        $this->assertIsString($stringValue);
    }
    /**
     * @test
     **/
    public function useBackslashForEscapingQuotesInStringsTest(){

    }
    /**
     * @test
     **/
    public function dotConcatenatesStringsTest(){
        $string = new Strings();
        $stringValue=$string->dotConcatenatesStrings("hola", "mai");
        $this->assertEquals("holamai", $stringValue);
    }
    /**
     * @test
     **/
    public function dotWorksWithVariablesTest(){

    }
    /**
     * @test
     **/
    public function dotEqualsAppendsToEndOfStringTest(){
        $string = new Strings();
        $stringValue=$string->dotEqualsAppendsToEndOfString("hola", "maider");
        $this->assertEquals("holamaider", $stringValue);
    }
    /**
     * @test
     **/
    public function getTheLengthOfAStringTest(){
        $string = new Strings();
        $stringValue=$string->getTheLengthOfAString();
        $this->assertEquals(15, $stringValue);
    }
    /**
     * @test
     **/
    public function countWordsInAStringTest(){
        $string = new Strings();
        $stringValue=$string->countWordsInAString();
        $this->assertEquals(3, $stringValue);
    }
    /**
     * @test
     **/
    public function reverseAStringTest(){
        $string = new Strings();
        $stringValue=$string->reverseAString();
        $this->assertEquals("rediam", $stringValue);
    }
    /**
     * @test
     **/
    public function searchForATextWithinAStringTest(){
        $string = new Strings();
        $stringValue=$string->searchForATextWithinAString();
        $this->assertTrue($stringValue);
    }
    /**
     * @test
     **/
    public function replaceTextWithinAStringTest(){
        $string = new Strings();
        $stringValue=$string->replaceTextWithinAString();
        $this->assertEquals("hola soy ivan", $stringValue);
    }


}
