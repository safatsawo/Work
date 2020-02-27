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
                'name' => 'Address',
                'url' => '/contact',
                'slug' => 'address',
            ]);
            TopNavigation::create([
                'name' => 'Email',
                'url' => '/contact',
                'slug' => 'email',
            ]);
            TopNavigation::create([
                'name' => 'Phone',
                'url' => '/contact',
                'slug' => 'phone',
            ]);
    }
}
