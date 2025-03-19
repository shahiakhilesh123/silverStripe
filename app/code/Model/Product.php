<?php
namespace App\Model;

use SilverStripe\ORM\DataObject;

class Product extends DataObject
{
    private static $table_name = 'Product';

    private static $db = [
        'Title' => 'Varchar',
        'Description' => 'Text',
        'Price' => 'Currency',
    ];

    private static $has_one = [
        'Category' => ProductCategory::class, // Relationship to Category
    ];
}