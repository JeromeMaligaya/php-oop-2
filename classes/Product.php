<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "../traits/Sellable.php";

class Product
{
    public string $nameProduct;
    public float $price;
    public string $image;
    public Category $category;

    use Sellable;

    public function __construct(
        string $nameProduct,
        float $price,
        string $image,
        Category $category,
    ) {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}
