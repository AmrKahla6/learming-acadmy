<?php

use Illuminate\Database\Seeder;
use App\testimonial;
class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        testimonial::create([
            'name'  => 'Mostafa kamel',
            'spec'  => 'Web Developer',
            'desc'  => 'Senior Web Developers design, build, and optimize websites and other online applications',
            'img'   => '1.png',
        ]);

        testimonial::create([
            'name'  => 'Khaled Elmetwaly',
            'spec'  => 'Lawyer',
            'desc'  => 'Lawyers advise and represent individuals, businesses, and government agencies on legal issues and disputes.',
            'img'   => '2.png',
        ]);

        testimonial::create([
            'name'  => 'Hosam Elgmal',
            'spec'  => 'Dentist',
            'desc'  => 'earching for a knowledgeable Dentist who can provide a range of services to our patients. The Dentist will meet with patients,',
            'img'   => '3.png',
        ]);
    }
}
