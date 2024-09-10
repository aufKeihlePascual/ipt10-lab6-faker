<?php

require_once 'vendor/autoload.php';

use Faker\Factory;

class Random {
    
    public static function generate300People($count = 300) {
        $faker = Factory::create('en_PH');
        $persons = [];

        // CSV file Headers
        $persons[] = [
            'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay', 
            'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number', 
            'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 
            'Birthdate', 'Email Address', 'Password'
        ];

        for ($i = 0; $i < $count; $i++) {
            $persons[] = [
                $faker->uuid,
                $faker->title,
                $faker->firstName,
                $faker->lastName,
                $faker->streetAddress,
                $faker->barangay,
                $faker->city,
                $faker->province,
                'Philippines',
                $faker->phoneNumber,
                $faker->mobileNumber,
                $faker->company,
                $faker->url,
                $faker->jobTitle,
                $faker->safeColorName,
                $faker->date('Y-m-d'),
                $faker->email,
                $faker->password
            ];
        }

        return $persons;
    }
}
?>