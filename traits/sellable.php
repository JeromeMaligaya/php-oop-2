<?php
trait Sellable
{
    public float $price;

    public function getPrice(): float
    {
        return $this->price;
    }
}
