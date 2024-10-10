<?php
class Type extends product
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
