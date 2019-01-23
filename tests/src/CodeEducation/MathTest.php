<?php

namespace CodeEducation;

class MathTest extends \PHPUnit_Framework_TestCase{

    // Nosso Primeiro Teste em PHP com PHPUnit
    public function testVerificaSeOTipoDaClasseEstaCorreto(){
        $this->assertInstanceOf("CodeEducation\Math", new \CodeEducation\Math);
    }

    public function testVerificaSeConsegueSomar(){
        $math = new \CodeEducation\Math;
        $resultado = $math->soma(10,12); // sabemos que o resultado deve ser 22
        $this->assertEquals(22, $resultado);

        // Novo Assert Para Garantir
        $resultado = $math->soma(2,3); // sabemos que o resultado deve ser 5
        $this->assertEquals(5, $resultado);

    }

}