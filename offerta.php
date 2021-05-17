<?php
  class Offerta {
    public $sconto;
    private $coupon_code;

    public function __construct ($sconto, $coupon_code) {
      $this->sconto = $sconto;
      $this->coupon_code = $coupon_code;
    }

    public function setSconto($sconto) {
      $this->sconto = $sconto;
    }
    public function getSconto($sconto) {
      return $this->sconto;
    }

    public function setCoupon($coupon) {
      $this->coupon = $coupon;
    }
    public function getCoupon($coupon) {
      return $this->coupon;
    }
  }
?>
