<?php
use PHPUnit\Framework\TestCase;
require_once('Calculator.php');


class CalculatorTest extends TestCase
{

    public function testStringAdd()
    {
      $calculator = new Calculator();
      $this->assertEquals(0, $calculator->Add(''));

      $this->assertEquals(1, $calculator->Add('1'), "Summing one number should return that number");

      $this->assertEquals(5, $calculator->Add('2,3'), "Adding two number should return their sum");

      $this->assertEquals(6, $calculator->Add('1,1,1,1,2'), "Adding two number should return their sum");
    }
}
?>
