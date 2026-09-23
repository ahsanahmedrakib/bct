<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Head Office',
                'region' => 'Dhaka, Bangladesh',
                'address' => 'House# 86, Road# Lake Drive, Sector#7, Uttara, Dhaka, Bangladesh',
                'phone1' => '+880 1313010180',
                'phone2' => '+880 9666777009',
                'email' => 'contact@bct.com.bd',
                'directions_link' => 'https://www.google.com/maps/search/House+86+Road+Lake+Drive+Sector+7+Uttara+Dhaka+Bangladesh',
                'color' => 'blue',
            ],
            [
                'name' => 'Branch Office',
                'region' => 'Dhaka, Bangladesh',
                'address' => 'House#6, Road# Shera Bangal Avenue, Block#B, Dolipara, Uttara, Dhaka-1230',
                'phone1' => '+880 1313010180',
                'phone2' => '+880 9666777009',
                'email' => 'contact@bct.com.bd',
                'directions_link' => 'https://www.google.com/maps/search/House+6+Road+Shera+Bangal+Avenue+Block+B+Dolipara+Uttara+Dhaka+1230',
                'color' => 'purple',
            ],
        ];

        foreach ($locations as $index => $location) {
            Location::firstOrCreate(
                ['name' => $location['name']],
                [
                    'region' => $location['region'],
                    'address' => $location['address'],
                    'phone1' => $location['phone1'],
                    'phone2' => $location['phone2'],
                    'email' => $location['email'],
                    'directions_link' => $location['directions_link'],
                    'color' => $location['color'],
                    'seed' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}