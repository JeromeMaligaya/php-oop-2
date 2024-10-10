<?php
class Category
{
    public string $nameCategory;
    public string $icon;

    public function __construct(
        string $nameCategory

    ) {
        $this->nameCategory = $nameCategory;
        $this->icon = $this->getCategoryIcon($nameCategory);
    }

    public function getCategoryIcon(string $nameCategory): string
    {
        $icon = '';
        if (strtolower($nameCategory) === 'gatto' || strtolower($nameCategory) === 'cat') {
            $icon = 'https://cdn.icon-icons.com/icons2/317/PNG/512/cat-icon_34469.png';
        } elseif (strtolower($nameCategory) === 'cane' || strtolower($nameCategory) === 'dog') {
            $icon = 'https://cdn.icon-icons.com/icons2/1465/PNG/512/441dogface_100527.png';
        } else {
            $icon = 'data:image/png;base64,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';
        }
        return $icon;
    }
}
