<?php
namespace App\Extensions;

use SilverStripe\ORM\DataExtension;

class ProductAdminExtension extends DataExtension
{
    // Add your custom methods or logic here
    public function updateCMSFields($fields)
    {
        // Example: Modify CMS fields
        $fields->addFieldToTab('Root.Main', new TextField('CustomField', 'Custom Field'));
    }
}