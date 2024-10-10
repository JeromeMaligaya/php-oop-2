<?php
class Category extends Product
{
    public string $nameCategory;

    public function __construct(
        string $nameProduct,
        float $price,
        string $image,
        string $nameCategory
    ) {
        parent::__construct($nameProduct, $price, $image);

        $this->nameCategory = $nameCategory;
    }
}
