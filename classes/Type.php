<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Type extends Product
{
    public string $nameType;

    public function __construct(
        string $nameProduct,
        float $price,
        string $image,
        string $nameType,
        Category $category,
    ) {
        parent::__construct($nameProduct, $price, $image, $category);

        $this->nameType = $nameType;
    }
}
