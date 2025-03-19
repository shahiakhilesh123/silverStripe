<?php
namespace App\Model;

use SilverStripe\ORM\DataObject;

class ProductCategory extends DataObject
{
    private static $table_name = 'ProductCategory';

    private static $db = [
        'Title' => 'Varchar',
        'Description' => 'Text',
    ];

    private static $has_many = [
        'Products' => Product::class, // Relationship to Products
    ];
}