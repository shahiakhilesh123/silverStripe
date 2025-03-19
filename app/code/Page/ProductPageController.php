<?php
namespace App\Page;

use PageController;
use App\Model\Product;
use App\Model\ProductCategory;

class ProductPageController extends PageController
{
    public function getProducts()
    {
        $products = Product::get();
        if ($products->exists()) {
            return $products;
        }
        return null;
    }

    public function getCategories()
    {
        return ProductCategory::get();
    }
}