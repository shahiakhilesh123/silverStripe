<?php
namespace App\Admin;

use SilverStripe\Admin\ModelAdmin;
use App\Model\Product;
use App\Model\ProductCategory;

class ProductAdmin extends ModelAdmin
{
    private static $managed_models = [
        Product::class,
        ProductCategory::class,
    ];
    static function add_to_class(){
        return [];
    }
    private static $url_segment = 'products'; // URL segment for the admin section
    private static $menu_title = 'Products'; // Menu title
}