<?php

use SilverStripe\Dev\BuildTask;
use SilverStripe\Security\Member;
use SilverStripe\Security\Group;

class CreateUserTask extends BuildTask
{
    protected $title = "Create User Task";
    protected $description = "Manually creates a user in SilverStripe.";

    public function run($request)
    {
        // Check if the user already exists
        if (Member::get()->filter('Email', 'john@example.com')->exists()) {
            echo "User already exists!";
            return;
        }

        // Create a new member
        $user = Member::create();
        $user->FirstName = 'John';
        $user->Surname = 'Doe';
        $user->Email = 'john@example.com';
        $user->Password = 'securepassword'; // Automatically hashed
        $user->write();

        // Add user to a group
        if ($adminGroup = Group::get()->filter('Title', 'Administrators')->first()) {
            $adminGroup->Members()->add($user);
        }

        echo "User created successfully!";
    }
}
