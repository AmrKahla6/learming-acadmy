<?php

use Illuminate\Database\Seeder;
use App\SiteContent;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContent::create([
            'name' => 'bannar',
                'content' => json_encode([
                    'title' => 'EVERY STUDENT YEARNS TO LEARN',
                    'subtitle' => 'Making Your World Better',
                    'desc'     => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man",
                ]),
            ]);

            SiteContent::create([
                'name' => 'awesome',
                'content' => json_encode([
                    'title' => 'Awesome Feature',
                    'desc'  => "Set have great you male grass yielding an yielding first their you're have called the abundantly fruit were man",
                ]),
            ]);

            SiteContent::create([
                'name' => 'future',
                'content' => json_encode([
                    'title' => 'Better Future',
                    'desc'  => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
                ]),
            ]);

            SiteContent::create([
                'name' => 'qualified',
                'content' => json_encode([
                    'title' => 'Qualified Trainers',
                    'desc'  => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
                ]),
            ]);

            SiteContent::create([
                'name' => 'job',
                'content' => json_encode([
                    'title' => 'Job Oppurtunity',
                    'desc'  => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male",
                ]),
           ]);

           SiteContent::create([
            'name' => 'courses',
            'content' => json_encode([
                'title'     => 'POPULAR COURSES',
                'subtitle'  => "Our Courses",
             ]),
            ]);

            SiteContent::create([
                'name' => 'student',
                'content' => json_encode([
                    'title'     => 'TESIMONIALS',
                    'subtitle'  => "Our Students",
                ]),
            ]);

           SiteContent::create([
                'name' => 'news',
                'content' => json_encode([
                    'title' => 'Newsletter',
                    'desc'  => "Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.",
                ]),
           ]);

           SiteContent::create([
            'name' => 'footer',
            'content' => json_encode([
                'desc'  => "But when shot real her. Chamber her one visite removal six sending himself boys scot exquisite existend an

                But when shot real her hamber her",
            ]),
        ]);
    }
}
