<?php
trait Sellable
{
    public float $price;

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDiscount(float $discount_percent): void
    {
        if ($discount_percent > 0 && $discount_percent < 100) {
            $discount = ($this->price * ($discount_percent / 100));
            $this->price -= $discount;
        } else {
            throw new Exception("Insert a correct argument (value range: 1 to 99) on getDiscount()");
        }
    }
}
