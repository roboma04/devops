<?php
use PHPUnit \Framework\TestCase;
include './SRC/calculadora.php';
final class CalculadoraTest extends TestCase
{
public function testSuma()
{
$calc = new Calculadora(3,4);
$this->assertEquals(7, $calc->suma());
}

public function testResta()
{
$calc = new Calculadora(7,4);
$this->assertEquals(3, $calc->resta());
}

public function testMultiplicacion()
{
$calc = new Calculadora(7,4);
$this->assertEquals(28, $calc->multiplicacion());
}
}
?>