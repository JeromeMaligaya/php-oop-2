<?php
class Type extends Category
{
    public string $nameType;

    public function __construct(
        string $nameProduct,
        float $price,
        string $image,
        string $nameCategory,
        string $nameType,
    ) {
        parent::__construct($nameProduct, $price, $image, $nameCategory);

        $this->nameType = $nameType;
    }
}
