<?php

use App\Navigation;
use Illuminate\Database\Seeder;

class NavigationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navigation::create([
            'name' => 'Home',
            'url' => '/',
            'slug' => 'home',
        ]);

        Navigation::create([
            'name' => 'About',
            'url' => '/about',
            'slug' => 'about',
        ]);

        Navigation::create([
            'name' => 'Services',
            'url' => '/services',
            'slug' => 'services',
        ]);

        Navigation::create([
            'name' => 'Frames',
            'url' => '/frames',
            'slug' => 'frames',
        ]);

        Navigation::create([
            'name' => 'Contact',
            'url' => '/contact',
            'slug' => 'contact',
        ]);
    }
}
