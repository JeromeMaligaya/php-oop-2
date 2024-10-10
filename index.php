<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/classes/Type.php';

$categoryDog = new Category("dog");

$categoryCat = new Category("cat");

$dogKibble = new Type(
    "Adult Dog Kibble - Chicken and Rice",
    29.99,
    "",
    "Food",
    $categoryDog
);

$fakeBoneToy = new Type(
    "Fake Bone Toy for Dogs",
    12.99,
    "",
    "Toy",
    $categoryDog
);

$softBed = new Type(
    "Soft Bed for Medium-Sized Dogs",
    49.99,
    "",
    "Bed",
    $categoryDog
);

$catKibble = new Type(
    "Cat Kibble - Salmon and Tuna",
    25.99,
    "",
    "Food",
    $categoryCat
);

$catScratchingPost = new Type(
    "Cat Scratching Post with Cat Hole",
    39.99,
    "",
    "Toy",
    $categoryCat
);

$catLitter = new Type(
    "Sanitizing Cat Litter",
    9.99,
    "",
    "Accessory",
    $categoryCat
);

$products = [
    $dogKibble,
    $fakeBoneToy,
    $softBed,
    $catKibble,
    $catScratchingPost,
    $catLitter,
];
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin Jerome Luna Maligaya">
    <title>php-oop-2</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bolder text-center">php-oop-2</h1>
                </div>
            </div>
        </div>
    </main>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>