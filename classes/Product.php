<?php
class Product
{
    public string $nameProduct;
    public float $price;
    public string $image;

    public function __construct(
        string $nameProduct,
        float $price,
        string $image
    ) {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->image = $image;
    }
}
