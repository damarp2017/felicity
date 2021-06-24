<?php

use App\Home;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("12345678");
        $user->save();

        $home = new Home();
        $home->title = "Your brand is a promise to your customers.";
        $home->subtitle = "We help you keep it.";
        $home->vision = "Our Vision";
        $home->vision_description = "Our vision is to take India to the world - capture its culture, its people, its expertise, and its diversity to enable other markets to enrich and inculcate Indian values; to make India a front-runner in advertising.";
        $home->manifesto_image = Storage::url('images/home/our_manifestos.png');
        $home->manifesto = "Our Manifesto";
        $home->manifesto_description = "Felicity was started out of sheer love and admiration for the art of advertising. We believe that ideas can change the world and it is our constant endeavour to help businesses grow and evolve over time. We want to work with brands that synergise with the values that we strongly imbibe in every thing we do here at Felicity.";
        $home->missions = [
            [
                'sequence' => '1',
                'logo' => asset('images/home/items/1.png'),
                'title' => 'Win-Win Situation',
                'subtitle' => 'When you score, we score!',
            ],
            [
                'sequence' => '2',
                'logo' => asset('images/home/items/2.png'),
                'title' => 'We’re Problem Solvers',
                'subtitle' => 'We simplify technology so you can focus on your brand',
            ],
            [
                'sequence' => '3',
                'logo' => asset('images/home/items/3.png'),
                'title' => 'We Worship Data',
                'subtitle' => 'Our creativity is driven by data and human experiences',
            ],
            [
                'sequence' => '4',
                'logo' => asset('images/home/items/4.png'),
                'title' => 'We Are Bold',
                'subtitle' => 'We dare to dream and to turn it into reality',
            ],
            [
                'sequence' => '5',
                'logo' => asset('images/home/items/5.png'),
                'title' => 'We’re Agile',
                'subtitle' => 'We make decisions quickly but carefully',
            ],
            [
                'sequence' => '6',
                'logo' => asset('images/home/items/6.png'),
                'title' => 'We’re Match-Makers',
                'subtitle' => 'From consumer to customer, we help you convert',
            ],
        ];
        $home->button_1 = [
            'title' => 'Know More',
            'link' => url('about-us'),
        ];
        $home->button_2 = [
            'title' => 'Download Company Deck',
            'link' => "//docs.google.com/presentation/d/18FTqkjBucoyTOq9QmWR6yMUNFE4F6kEbvlio6IBuE_U/edit?usp=sharing",
        ];
        $home->save();
    }
}
