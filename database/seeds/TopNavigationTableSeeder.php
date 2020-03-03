<?php

use App\TopNavigation;
use Illuminate\Database\Seeder;

class TopNavigationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            TopNavigation::create([
                'name' => 'Premises Of Sunny FM North Ridge, ACCRA',
                'url' => '/contact',
                'slug' => 'address',
            ]);
            TopNavigation::create([
                'name' => 'info@thirdeyecare.com',
                'url' => '/contact',
                'slug' => 'email',
            ]);
            TopNavigation::create([
                'name' => '0543287008/0503881093',
                'url' => '/contact',
                'slug' => 'phone',
            ]);
    }
}
