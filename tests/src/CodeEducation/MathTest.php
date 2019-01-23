<?php

namespace CodeEducation;

class MathTest extends \PHPUnit_Framework_TestCase{

    // Nosso Primeiro Teste em PHP com PHPUnit
    public function testVerificaSeOTipoDaClasseEstaCorreto(){
        $this->assertInstanceOf("CodeEducation\Math", new \CodeEducation\Math);
    }

}