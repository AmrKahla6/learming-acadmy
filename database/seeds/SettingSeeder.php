<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name'       => 'Learning Academy',
            'logo'       => 'logo.png',
            'favicon'    => 'favicon.png',
            'city'       => 'Mansoura, Egypt',
            'adderess'   => '50 Abbas El-akkad, Naser City',
            'phone'      => '01154400681',
            'work_hours' => 'Sun to Thurs 9am to 5pm',
            'email'      => 'amrkahla6@gmail.com',
            'map'        => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d27348.542882103375!2d31.372083199999995!3d31.038287450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1608133518880!5m2!1sar!2seg" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
             'fb'        => 'https://www.facebook.com/magic.fight/',
             'twitter'   => 'https://www.twitter.com',
             'insta'     =>'https://www.instagram.com/',
        ]);
    }
}
