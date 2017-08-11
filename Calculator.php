<?php
class Calculator {
  function Add($numbers) {
    if ($numbers) {
      $numberList = preg_split( "/[,|\n]/", $numbers );
      return array_sum($numberList);
    }
    return 0;
  }
}
?>
