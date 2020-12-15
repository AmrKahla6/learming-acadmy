<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $images = [
            '1603384164ZKM8940gFM.png',
            '1603144492MiJUfeJLOt.png',
            '1603145566fe4xqFxLiw.png',
            '1603455992mSQlsE8niv.png',
            '1603455679tYcySbtops.png'
        ];

        for ($i=1; $i < 5; $i++) {
            for ($j=1; $j <6 ; $j++) {
                Course::create([
                    'cat_id'     => $i,
                    'trainer_id' => rand(1 , 5),
                    'name'       => "course num $j category $i",
                    'small_desc' => $faker->text,
                    'desc'       => $faker->paragraph,
                    'price'      => rand(1000, 5000),
                    'img'        => $images[rand(0,4)],
                ]);
            }
        }
    }
}
