<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name'  => 'Abed Kahla',
            'spec'  => 'Accountant',
            'img'   => '1.png',
        ]);

        Trainer::create([
            'name'  => 'Abedelhamed Elsayed',
            'spec'  => 'Web Developer',
            'img' => '2.png',
        ]);

        Trainer::create([
            'name'  => 'Mohamed Khaled',
            'spec'  => 'Dectoer',
            'img'   => '3.png',
        ]);

        Trainer::create([
            'name'  => 'Ahmed Monem',
            'spec'  => 'Artist',
            'img'   => '4.png',
        ]);

        Trainer::create([
            'name'  => 'Shady Fady',
            'spec'  => 'Designer',
            'img'   => '5.png',
        ]);
    }
}
