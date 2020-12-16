<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  => 'Programing',
            'img'   => '1.png',
        ]);

        Category::create([
            'name'  => 'Medical',
            'img'   => '2.png',
        ]);

        Category::create([
            'name'  => 'Accountants',
            'img'   => '3.png',
        ]);

        Category::create([
            'name'  => 'English',
            'img'   => '4.png',
        ]);

        Category::create([
            'name'  => 'Artists',
            'img'   => '5.png',
        ]);


        Category::create([
            'name'  => 'Designers',
            'img'   => '6.png',
        ]);
    }
}
