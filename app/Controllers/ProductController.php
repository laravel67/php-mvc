<?php

namespace Web\App\PHP\MVC\Controllers;

class ProductController
{
    function categories(string $productId, string $categoryID): void
    {
        echo "Product $productId,  Category $categoryID";
    }
}
