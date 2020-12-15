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
        $name = ['Programing' , 'English' , 'Medical' , 'Artists' , 'Accountants' , 'Designers'];
        for ($i=0; $i < 5; $i++)
        {
            $array = [
                'name' => $name[rand(0,3)],
            ];
            $cat = Category::create($array);
        }
}
}
