<?php

class Converter {
  function __construct($amount, $unit) {
    $this->orig_unit = strtolower($unit);
    $this->orig_amount = round($amount,6);
    $this->conversions = array();
  }

  function convert($unit) {
    if ($unit == $this->base_unit) {
      return $this->base_amount;
    } else {
      $conversion = $this->conversions[$unit];
      // This is a stand-in for my complete laziness at finding a math parser for PHP.
      return eval("return " . str_replace("amount", $this->base_amount, $conversion) . ";");
    }
  }
}

class Temperature extends Converter {
  function __construct($amount, $unit) {
    parent::__construct($amount, $unit);
    $this->base_unit = "f";
    if ($unit == $this->base_unit) {
      $this->base_amount = $amount;
    } else if ($unit == "c") {
      $this->base_amount = $amount * 1.8 + 32;
    }
    $this->conversions["c"] = "(amount - 32) / 1.8";
  }
}

?>